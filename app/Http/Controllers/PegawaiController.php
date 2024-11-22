<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Pegawai;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Administrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all(); // Mengambil semua data pegawai
        return view('index', compact('pegawai')); // Mengirim data ke view
    }

    public function create()
    {
        $keahlianList = config('keahlian');
        return view('create', compact('keahlianList'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi input
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'alamat_domisili' => 'required|string|max:255',
            'status_perkawinan' => 'required|string',
            'nomor_hp' => 'required|string|max:20',
            'email_pribadi' => 'required|email|max:255',
            'email_kantor' => 'nullable|email|max:255',
            'kontak_darurat' => 'required|string|max:20',
            'nip' => 'required|string|max:20',
            'jabatan' => 'required|string|max:255',
            'divisi' => 'required|string|max:255',
            'tanggal_mulai_kerja' => 'required|date',
            'status_pegawai' => 'required|string',
            'level_senioritas' => 'required|string',
            'pendidikan_terakhir' => 'required|string|max:255',
            'keahlian_teknologi' => 'array',
            'keahlian_teknologi.*' => 'string|max:255',
            'bahasa_asing' => 'nullable|string|max:255',
            'bpjs_kesehatan' => 'nullable|string|max:50',
            'bpjs_ketenagakerjaan' => 'nullable|string|max:50',
            // 'kontrak_kerja' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
            'nomor_rekening' => 'required|string|max:50',
            'nomor_npwp' => 'nullable|string|max:50',
        ]);
        // dd($request->all());


        DB::beginTransaction();

        try {
            // Simpan data pegawai
            $pegawai = Pegawai::create([
                'nama_lengkap' => $request->nama_lengkap,
                'tanggal_lahir' => $request->tanggal_lahir,
                'tempat_lahir' => $request->tempat_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat_domisili' => $request->alamat_domisili,
                'status_perkawinan' => $request->status_perkawinan,
            ]);

            // Simpan data pekerjaan
            Pekerjaan::create([
                'pegawai_id' => $pegawai->id,
                'nip' => $request->nip,
                'jabatan' => $request->jabatan,
                'divisi' => $request->divisi,
                'tanggal_mulai_kerja' => $request->tanggal_mulai_kerja,
                'status_pegawai' => $request->status_pegawai,
                'level_senioritas' => $request->level_senioritas,
            ]);

            // Simpan data pendidikan
            Pendidikan::create([
                'pegawai_id' => $pegawai->id,
                'pendidikan_terakhir' => $request->pendidikan_terakhir,
                'keahlian_teknologi' => json_encode($request->keahlian_teknologi),
                'bahasa_asing' => $request->bahasa_asing,
            ]);

            // Simpan data kontak
            Kontak::create([
                'pegawai_id' => $pegawai->id,
                'nomor_hp' => $request->nomor_hp,
                'email_pribadi' => $request->email_pribadi,
                'email_kantor' => $request->email_kantor,
                'kontak_darurat' => $request->kontak_darurat,
            ]);

            // Simpan data administrasi
            $data = [
                'pegawai_id' => $pegawai->id,
                'npwp' => $request->nomor_npwp,
                'rekening_bank' => $request->nomor_rekening,
            ];

            // Cek apakah file `kontrak_kerja` ada
            if ($request->hasFile('kontrak_kerja')) {
                $file = $request->file('kontrak_kerja');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/kontrak_kerja'), $fileName);
                $data['kontrak_kerja'] = $fileName;
            }

            // Simpan data ke dalam tabel `administrasi`
            Administrasi::create($data);


            // Commit transaksi
            DB::commit();

            return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function show($id)
    {
        // Ambil data pegawai termasuk relasi pendidikan
        $pegawai = Pegawai::with('pendidikan')->findOrFail($id);
        $keahlianList = config('keahlian');

        // Dekode keahlian teknologi
        if ($pegawai->pendidikan && $pegawai->pendidikan->keahlian_teknologi) {
            $pegawai->pendidikan->keahlian_teknologi = json_decode($pegawai->pendidikan->keahlian_teknologi, true);
        }

        return view('show', compact('pegawai', 'keahlianList'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'alamat_domisili' => 'required|string|max:255',
            'status_perkawinan' => 'required|string|in:Belum Menikah,Menikah,Lainnya',
            'pendidikan_terakhir' => 'required|string|max:255',
            'keahlian_teknologi' => 'nullable|array',
            'keahlian_teknologi.*' => 'string|max:255',
            'bahasa_asing' => 'nullable|string|max:255',
            'bpjs_kesehatan' => 'nullable|string|max:255',
            'bpjs_ketenagakerjaan' => 'nullable|string|max:255',
            'nomor_npwp' => 'nullable|string|max:255',
            'nomor_rekening' => 'nullable|string|max:255',
            'kontrak_kerja' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:10240',
            'nomor_hp' => 'required',
            'email_pribadi' => 'required|email',
            'email_kantor' => 'nullable|email',
            'kontak_darurat' => 'required',
            'nip' => 'required|string|max:20',
            'jabatan' => 'required|string|max:255',
            'divisi' => 'required|string|max:255',
            'tanggal_mulai_kerja' => 'required|date',
            'status_pegawai' => 'required|string',
            'level_senioritas' => 'required|string',
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update([
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_domisili' => $request->alamat_domisili,
            'status_perkawinan' => $request->status_perkawinan,
        ]);

        $pegawai->pendidikan()->update([
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'keahlian_teknologi' => json_encode($request->keahlian_teknologi),
            'bahasa_asing' => $request->bahasa_asing,
        ]);
        $pegawai->kontak()->update([
            'nomor_hp' => $request->nomor_hp,
            'email_pribadi' => $request->email_pribadi,
            'email_kantor' => $request->email_kantor,
            'kontak_darurat' => $request->kontak_darurat,
        ]);
        $pegawai->pekerjaan()->update([
            'nip'=> $request->nip,
            'jabatan'=> $request->jabatan,
            'divisi'=> $request->divisi,
            'tanggal_mulai_kerja'=> $request->tanggal_mulai_kerja,
            'status_pegawai'=> $request->status_pegawai,
            'level_senioritas'=> $request->level_senioritas,
        ]);
        $administrasiData = [
            'bpjs_kesehatan' => $request->bpjs_kesehatan,
            'bpjs_ketenagakerjaan' => $request->bpjs_ketenagakerjaan,
            'npwp' => $request->nomor_npwp,
            'rekening_bank' => $request->nomor_rekening,
        ];
        
        // Jika ada file kontrak_kerja yang diupload, tambahkan ke $administrasiData
        if ($request->hasFile('kontrak_kerja')) {
            $file = $request->file('kontrak_kerja');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/kontrak_kerja'), $fileName);
            $administrasiData['kontrak_kerja'] = $fileName;
        }
        
        // Update atau buat data administrasi
        if ($pegawai->administrasi) {
            $pegawai->administrasi()->update($administrasiData);
        } else {
            $pegawai->administrasi()->create($administrasiData);
        }
        

        return redirect()->route('pegawai.show', $id)->with('success', 'Data pegawai berhasil diperbarui.');
    }
}
