<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $fillable = [
        'nama_lengkap',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'alamat_domisili',
        'status_perkawinan',
    ];

    public function kontak()
    {
        return $this->hasOne(Kontak::class);
    }

    // Relasi ke tabel 'pekerjaan'
    public function pekerjaan()
    {
        return $this->hasOne(Pekerjaan::class);
    }

    // Relasi ke tabel 'pendidikan'
    public function pendidikan()
    {
        return $this->hasOne(Pendidikan::class);
    }

    // Relasi ke tabel 'administrasi'
    public function administrasi()
    {
        return $this->hasOne(Administrasi::class);
    }
}
