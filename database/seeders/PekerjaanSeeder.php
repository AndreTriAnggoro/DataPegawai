<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanSeeder extends Seeder
{
    public function run(): void
    {
        $pekerjaan = [
            ['pegawai_id' => 1, 'nip' => '123456789', 'jabatan' => 'Manager', 'divisi' => 'HRD', 'tanggal_mulai_kerja' => '2015-03-01', 'status_pegawai' => 'Tetap', 'level_senioritas' => 'Senior'],
            ['pegawai_id' => 2, 'nip' => '987654321', 'jabatan' => 'Staff', 'divisi' => 'IT', 'tanggal_mulai_kerja' => '2018-06-15', 'status_pegawai' => 'Kontrak', 'level_senioritas' => 'Junior'],
            ['pegawai_id' => 3, 'nip' => '112233445', 'jabatan' => 'Manager', 'divisi' => 'Finance', 'tanggal_mulai_kerja' => '2014-07-10', 'status_pegawai' => 'Tetap', 'level_senioritas' => 'Senior'],
            ['pegawai_id' => 4, 'nip' => '223344556', 'jabatan' => 'Supervisor', 'divisi' => 'Marketing', 'tanggal_mulai_kerja' => '2019-08-05', 'status_pegawai' => 'Kontrak', 'level_senioritas' => 'Mid-level'],
            ['pegawai_id' => 5, 'nip' => '334455667', 'jabatan' => 'Staff', 'divisi' => 'Logistik', 'tanggal_mulai_kerja' => '2020-05-17', 'status_pegawai' => 'Magang', 'level_senioritas' => 'Junior'],
            ['pegawai_id' => 6, 'nip' => '445566778', 'jabatan' => 'Assistant Manager', 'divisi' => 'HRD', 'tanggal_mulai_kerja' => '2017-04-11', 'status_pegawai' => 'Tetap', 'level_senioritas' => 'Mid-level'],
            ['pegawai_id' => 7, 'nip' => '556677889', 'jabatan' => 'Director', 'divisi' => 'IT', 'tanggal_mulai_kerja' => '2012-01-20', 'status_pegawai' => 'Tetap', 'level_senioritas' => 'Senior'],
            ['pegawai_id' => 8, 'nip' => '667788990', 'jabatan' => 'Staff', 'divisi' => 'Finance', 'tanggal_mulai_kerja' => '2021-09-03', 'status_pegawai' => 'Freelancer', 'level_senioritas' => 'Junior'],
            ['pegawai_id' => 9, 'nip' => '778899001', 'jabatan' => 'Senior Engineer', 'divisi' => 'Engineering', 'tanggal_mulai_kerja' => '2016-12-19', 'status_pegawai' => 'Tetap', 'level_senioritas' => 'Senior'],
            ['pegawai_id' => 10, 'nip' => '889900112', 'jabatan' => 'Junior Developer', 'divisi' => 'IT', 'tanggal_mulai_kerja' => '2022-02-25', 'status_pegawai' => 'Magang', 'level_senioritas' => 'Junior'],
            ['pegawai_id' => 11, 'nip' => '990011223', 'jabatan' => 'Staff', 'divisi' => 'Legal', 'tanggal_mulai_kerja' => '2019-11-12', 'status_pegawai' => 'Kontrak', 'level_senioritas' => 'Junior'],
            ['pegawai_id' => 12, 'nip' => '101112233', 'jabatan' => 'Manager', 'divisi' => 'Customer Service', 'tanggal_mulai_kerja' => '2015-05-30', 'status_pegawai' => 'Tetap', 'level_senioritas' => 'Senior'],
            ['pegawai_id' => 13, 'nip' => '112233445', 'jabatan' => 'Supervisor', 'divisi' => 'Logistik', 'tanggal_mulai_kerja' => '2020-06-01', 'status_pegawai' => 'Freelancer', 'level_senioritas' => 'Mid-level'],
            ['pegawai_id' => 14, 'nip' => '223344556', 'jabatan' => 'Senior Analyst', 'divisi' => 'IT', 'tanggal_mulai_kerja' => '2013-09-10', 'status_pegawai' => 'Tetap', 'level_senioritas' => 'Senior'],
            ['pegawai_id' => 15, 'nip' => '334455667', 'jabatan' => 'Staff', 'divisi' => 'Finance', 'tanggal_mulai_kerja' => '2021-03-20', 'status_pegawai' => 'Kontrak', 'level_senioritas' => 'Junior']
        ];

        DB::table('pekerjaan')->insert($pekerjaan);
    }
}
