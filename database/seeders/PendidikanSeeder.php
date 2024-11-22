<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendidikanSeeder extends Seeder
{
    public function run(): void
    {
        $pendidikan = [
            ['pegawai_id' => 1, 'pendidikan_terakhir' => 'S2', 'keahlian_teknologi' => json_encode(['Java', 'PHP', 'Python']), 'bahasa_asing' => 'Inggris'],
            ['pegawai_id' => 2, 'pendidikan_terakhir' => 'S1', 'keahlian_teknologi' => json_encode(['HTML', 'CSS']), 'bahasa_asing' => 'Jerman'],
            ['pegawai_id' => 3, 'pendidikan_terakhir' => 'S2', 'keahlian_teknologi' => json_encode(['C#', 'SQL', 'JavaScript']), 'bahasa_asing' => 'Prancis'],
            ['pegawai_id' => 4, 'pendidikan_terakhir' => 'S1', 'keahlian_teknologi' => json_encode(['PHP', 'Laravel', 'Node.js']), 'bahasa_asing' => 'Spanyol'],
            ['pegawai_id' => 5, 'pendidikan_terakhir' => 'S1', 'keahlian_teknologi' => json_encode(['Ruby', 'React', 'MongoDB']), 'bahasa_asing' => 'Mandarin'],
            ['pegawai_id' => 6, 'pendidikan_terakhir' => 'S2', 'keahlian_teknologi' => json_encode(['Java', 'Kotlin', 'Android']), 'bahasa_asing' => 'Inggris'],
            ['pegawai_id' => 7, 'pendidikan_terakhir' => 'S3', 'keahlian_teknologi' => json_encode(['Python', 'Django', 'Data Science']), 'bahasa_asing' => 'Jepang'],
            ['pegawai_id' => 8, 'pendidikan_terakhir' => 'S1', 'keahlian_teknologi' => json_encode(['HTML', 'CSS', 'Vue.js']), 'bahasa_asing' => 'Italia'],
            ['pegawai_id' => 9, 'pendidikan_terakhir' => 'S2', 'keahlian_teknologi' => json_encode(['C++', 'Linux', 'Docker']), 'bahasa_asing' => 'Arab'],
            ['pegawai_id' => 10, 'pendidikan_terakhir' => 'S1', 'keahlian_teknologi' => json_encode(['PHP', 'Laravel', 'MySQL']), 'bahasa_asing' => 'Korea'],
            ['pegawai_id' => 11, 'pendidikan_terakhir' => 'S2', 'keahlian_teknologi' => json_encode(['JavaScript', 'Angular', 'Node.js']), 'bahasa_asing' => 'Prancis'],
            ['pegawai_id' => 12, 'pendidikan_terakhir' => 'S1', 'keahlian_teknologi' => json_encode(['Swift', 'iOS', 'Firebase']), 'bahasa_asing' => 'Inggris'],
            ['pegawai_id' => 13, 'pendidikan_terakhir' => 'S1', 'keahlian_teknologi' => json_encode(['Python', 'Flask', 'Machine Learning']), 'bahasa_asing' => 'Mandarin'],
            ['pegawai_id' => 14, 'pendidikan_terakhir' => 'S2', 'keahlian_teknologi' => json_encode(['Java', 'Spring Boot', 'Jenkins']), 'bahasa_asing' => 'Jerman'],
            ['pegawai_id' => 15, 'pendidikan_terakhir' => 'S1', 'keahlian_teknologi' => json_encode(['HTML', 'JavaScript', 'React']), 'bahasa_asing' => 'Spanyol']
        ];

        DB::table('pendidikan')->insert($pendidikan);
    }
}
