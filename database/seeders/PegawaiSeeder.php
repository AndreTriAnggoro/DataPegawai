<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    public function run(): void
    {
        $pegawai = [
            ['nama_lengkap' => 'Ahmad Santoso', 'tanggal_lahir' => '1990-05-12', 'tempat_lahir' => 'Jakarta', 'jenis_kelamin' => 'Laki-laki', 'alamat_domisili' => 'Jakarta Selatan', 'status_perkawinan' => 'Menikah'],
            ['nama_lengkap' => 'Siti Aminah', 'tanggal_lahir' => '1993-07-20', 'tempat_lahir' => 'Bandung', 'jenis_kelamin' => 'Perempuan', 'alamat_domisili' => 'Bandung Barat', 'status_perkawinan' => 'Belum Menikah'],
            ['nama_lengkap' => 'Budi Prasetyo', 'tanggal_lahir' => '1988-09-10', 'tempat_lahir' => 'Surabaya', 'jenis_kelamin' => 'Laki-laki', 'alamat_domisili' => 'Surabaya Timur', 'status_perkawinan' => 'Menikah'],
            ['nama_lengkap' => 'Dewi Kartika', 'tanggal_lahir' => '1995-02-15', 'tempat_lahir' => 'Medan', 'jenis_kelamin' => 'Perempuan', 'alamat_domisili' => 'Medan Tuntungan', 'status_perkawinan' => 'Belum Menikah'],
            ['nama_lengkap' => 'Andi Setiawan', 'tanggal_lahir' => '1992-06-18', 'tempat_lahir' => 'Makassar', 'jenis_kelamin' => 'Laki-laki', 'alamat_domisili' => 'Makassar Selatan', 'status_perkawinan' => 'Menikah'],
            ['nama_lengkap' => 'Lestari Putri', 'tanggal_lahir' => '1998-04-23', 'tempat_lahir' => 'Palembang', 'jenis_kelamin' => 'Perempuan', 'alamat_domisili' => 'Palembang Timur', 'status_perkawinan' => 'Belum Menikah'],
            ['nama_lengkap' => 'Rizky Hidayat', 'tanggal_lahir' => '1991-08-09', 'tempat_lahir' => 'Semarang', 'jenis_kelamin' => 'Laki-laki', 'alamat_domisili' => 'Semarang Barat', 'status_perkawinan' => 'Menikah'],
            ['nama_lengkap' => 'Ayu Lestari', 'tanggal_lahir' => '1994-11-30', 'tempat_lahir' => 'Yogyakarta', 'jenis_kelamin' => 'Perempuan', 'alamat_domisili' => 'Yogyakarta Utara', 'status_perkawinan' => 'Belum Menikah'],
            ['nama_lengkap' => 'Hendra Gunawan', 'tanggal_lahir' => '1989-03-05', 'tempat_lahir' => 'Malang', 'jenis_kelamin' => 'Laki-laki', 'alamat_domisili' => 'Malang Selatan', 'status_perkawinan' => 'Menikah'],
            ['nama_lengkap' => 'Sri Wahyuni', 'tanggal_lahir' => '1996-12-01', 'tempat_lahir' => 'Solo', 'jenis_kelamin' => 'Perempuan', 'alamat_domisili' => 'Solo Tengah', 'status_perkawinan' => 'Belum Menikah'],
            ['nama_lengkap' => 'Dedi Irawan', 'tanggal_lahir' => '1987-07-22', 'tempat_lahir' => 'Pontianak', 'jenis_kelamin' => 'Laki-laki', 'alamat_domisili' => 'Pontianak Utara', 'status_perkawinan' => 'Menikah'],
            ['nama_lengkap' => 'Nina Saputri', 'tanggal_lahir' => '1997-10-14', 'tempat_lahir' => 'Bali', 'jenis_kelamin' => 'Perempuan', 'alamat_domisili' => 'Denpasar Selatan', 'status_perkawinan' => 'Belum Menikah'],
            ['nama_lengkap' => 'Arif Setiawan', 'tanggal_lahir' => '1993-05-28', 'tempat_lahir' => 'Bandar Lampung', 'jenis_kelamin' => 'Laki-laki', 'alamat_domisili' => 'Lampung Tengah', 'status_perkawinan' => 'Menikah'],
            ['nama_lengkap' => 'Maya Amalia', 'tanggal_lahir' => '1999-09-19', 'tempat_lahir' => 'Balikpapan', 'jenis_kelamin' => 'Perempuan', 'alamat_domisili' => 'Balikpapan Barat', 'status_perkawinan' => 'Belum Menikah'],
            ['nama_lengkap' => 'Samsul Bahri', 'tanggal_lahir' => '1985-12-17', 'tempat_lahir' => 'Pekanbaru', 'jenis_kelamin' => 'Laki-laki', 'alamat_domisili' => 'Pekanbaru Selatan', 'status_perkawinan' => 'Menikah'],
        ];

        DB::table('pegawai')->insert($pegawai);
    }
}
