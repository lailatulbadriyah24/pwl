<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mata_kuliah')->insert(
            [
                [
                    "nama" => "Rekayasa Perangkat Lunak",
                    "semester" => 2,
                    "sks" => 3,
                    "dosen" => "Ananda, S.Kom., M.Kom"
                ],
                [
                    "nama" => "Sistem Operasi",
                    "semester" => 2,
                    "sks" => 2,
                    "dosen" => "Dina Hapsari, S.Kom., M.Kom"
                ],
                [
                    "nama" => "Dasar Pemrograman",
                    "semester" => 1,
                    "sks" => 3,
                    "dosen" => "Cahya Subagya, S.Kom., M.Kom"
                ],
                [
                    "nama" => "Kewarganegaraan",
                    "semester" => 3,
                    "sks" => 2,
                    "dosen" => "Winda Susilo, S.Kom., M.Kom"
                ]
            ]
        );
    }
}
