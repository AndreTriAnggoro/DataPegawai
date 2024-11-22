<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KontakSeeder extends Seeder
{
    public function run(): void
    {
        $kontak = [
            ['pegawai_id' => 1, 'nomor_hp' => '081234567890', 'email_pribadi' => 'ahmad@gmail.com', 'email_kantor' => 'ahmad@kantor.com', 'kontak_darurat' => '081234567891'],
            ['pegawai_id' => 2, 'nomor_hp' => '081298765432', 'email_pribadi' => 'siti@gmail.com', 'email_kantor' => null, 'kontak_darurat' => '081298765431'],
            ['pegawai_id' => 3, 'nomor_hp' => '081345678901', 'email_pribadi' => 'budi@gmail.com', 'email_kantor' => 'budi@kantor.com', 'kontak_darurat' => '081345678902'],
            ['pegawai_id' => 4, 'nomor_hp' => '081234567892', 'email_pribadi' => 'dewi@gmail.com', 'email_kantor' => 'dewi@kantor.com', 'kontak_darurat' => '081234567893'],
            ['pegawai_id' => 5, 'nomor_hp' => '081567890123', 'email_pribadi' => 'andi@gmail.com', 'email_kantor' => 'andi@kantor.com', 'kontak_darurat' => '081567890124'],
            ['pegawai_id' => 6, 'nomor_hp' => '081234567894', 'email_pribadi' => 'lestari@gmail.com', 'email_kantor' => 'lestari@kantor.com', 'kontak_darurat' => '081234567895'],
            ['pegawai_id' => 7, 'nomor_hp' => '081678901234', 'email_pribadi' => 'rizky@gmail.com', 'email_kantor' => 'rizky@kantor.com', 'kontak_darurat' => '081678901235'],
            ['pegawai_id' => 8, 'nomor_hp' => '081234567896', 'email_pribadi' => 'ayu@gmail.com', 'email_kantor' => 'ayu@kantor.com', 'kontak_darurat' => '081234567897'],
            ['pegawai_id' => 9, 'nomor_hp' => '081789012345', 'email_pribadi' => 'hendra@gmail.com', 'email_kantor' => 'hendra@kantor.com', 'kontak_darurat' => '081789012346'],
            ['pegawai_id' => 10, 'nomor_hp' => '081234567898', 'email_pribadi' => 'sri@gmail.com', 'email_kantor' => 'sri@kantor.com', 'kontak_darurat' => '081234567899'],
            ['pegawai_id' => 11, 'nomor_hp' => '081890123456', 'email_pribadi' => 'dedi@gmail.com', 'email_kantor' => 'dedi@kantor.com', 'kontak_darurat' => '081890123457'],
            ['pegawai_id' => 12, 'nomor_hp' => '081234567900', 'email_pribadi' => 'nina@gmail.com', 'email_kantor' => 'nina@kantor.com', 'kontak_darurat' => '081234567901'],
            ['pegawai_id' => 13, 'nomor_hp' => '081901234567', 'email_pribadi' => 'arif@gmail.com', 'email_kantor' => 'arif@kantor.com', 'kontak_darurat' => '081901234568'],
            ['pegawai_id' => 14, 'nomor_hp' => '081234567902', 'email_pribadi' => 'maya@gmail.com', 'email_kantor' => 'maya@kantor.com', 'kontak_darurat' => '081234567903'],
            ['pegawai_id' => 15, 'nomor_hp' => '081012345678', 'email_pribadi' => 'samsul@gmail.com', 'email_kantor' => 'samsul@kantor.com', 'kontak_darurat' => '081012345679']
        ];

        DB::table('kontak')->insert($kontak);
    }
}
