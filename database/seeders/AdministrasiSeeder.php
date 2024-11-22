<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministrasiSeeder extends Seeder
{
    public function run(): void
    {
        $administrasi = [
            ['pegawai_id' => 1, 'bpjs_kesehatan' => '1234567890', 'bpjs_ketenagakerjaan' => '0987654321', 'npwp' => '123456789012345', 'rekening_bank' => '1122334455', 'kontrak_kerja' => null],
            ['pegawai_id' => 2, 'bpjs_kesehatan' => '9876543210', 'bpjs_ketenagakerjaan' => '1234567890', 'npwp' => '987654321098765', 'rekening_bank' => '5544332211', 'kontrak_kerja' => null],
            ['pegawai_id' => 3, 'bpjs_kesehatan' => '1234598765', 'bpjs_ketenagakerjaan' => '8765432109', 'npwp' => '543210987654321', 'rekening_bank' => '1122334456', 'kontrak_kerja' => null],
            ['pegawai_id' => 4, 'bpjs_kesehatan' => '2345678901', 'bpjs_ketenagakerjaan' => '2345678901', 'npwp' => '234567890123456', 'rekening_bank' => '2233445566', 'kontrak_kerja' => null],
            ['pegawai_id' => 5, 'bpjs_kesehatan' => '3456789012', 'bpjs_ketenagakerjaan' => '3456789012', 'npwp' => '345678901234567', 'rekening_bank' => '3344556677', 'kontrak_kerja' => null],
            ['pegawai_id' => 6, 'bpjs_kesehatan' => '4567890123', 'bpjs_ketenagakerjaan' => '4567890123', 'npwp' => '456789012345678', 'rekening_bank' => '4455667788', 'kontrak_kerja' => null],
            ['pegawai_id' => 7, 'bpjs_kesehatan' => '5678901234', 'bpjs_ketenagakerjaan' => '5678901234', 'npwp' => '567890123456789', 'rekening_bank' => '5566778899', 'kontrak_kerja' => null],
            ['pegawai_id' => 8, 'bpjs_kesehatan' => '6789012345', 'bpjs_ketenagakerjaan' => '6789012345', 'npwp' => '678901234567890', 'rekening_bank' => '6677889900', 'kontrak_kerja' => null],
            ['pegawai_id' => 9, 'bpjs_kesehatan' => '7890123456', 'bpjs_ketenagakerjaan' => '7890123456', 'npwp' => '789012345678901', 'rekening_bank' => '7788990011', 'kontrak_kerja' => null],
            ['pegawai_id' => 10, 'bpjs_kesehatan' => '8901234567', 'bpjs_ketenagakerjaan' => '8901234567', 'npwp' => '890123456789012', 'rekening_bank' => '8899001122', 'kontrak_kerja' => null],
            ['pegawai_id' => 11, 'bpjs_kesehatan' => '9012345678', 'bpjs_ketenagakerjaan' => '9012345678', 'npwp' => '901234567890123', 'rekening_bank' => '9900112233', 'kontrak_kerja' => null],
            ['pegawai_id' => 12, 'bpjs_kesehatan' => '1234123412', 'bpjs_ketenagakerjaan' => '1234123412', 'npwp' => '123412341234123', 'rekening_bank' => '1100223344', 'kontrak_kerja' => null],
            ['pegawai_id' => 13, 'bpjs_kesehatan' => '2345234523', 'bpjs_ketenagakerjaan' => '2345234523', 'npwp' => '234523452345234', 'rekening_bank' => '2200334455', 'kontrak_kerja' => null],
            ['pegawai_id' => 14, 'bpjs_kesehatan' => '3456345634', 'bpjs_ketenagakerjaan' => '3456345634', 'npwp' => '345634563456345', 'rekening_bank' => '3300445566', 'kontrak_kerja' => null],
            ['pegawai_id' => 15, 'bpjs_kesehatan' => '4567456745', 'bpjs_ketenagakerjaan' => '4567456745', 'npwp' => '456745674567456', 'rekening_bank' => '4400556677', 'kontrak_kerja' => null]
        ];

        DB::table('administrasi')->insert($administrasi);
    }
}
