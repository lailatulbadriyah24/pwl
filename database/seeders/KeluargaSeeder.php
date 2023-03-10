<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('keluarga')->insert(
            [
                [
                    "nama" => "Alex Nurcahyo",
                    "hubungan" => "Ayah",
                    "tanggal_lahir" => Carbon::create("1986","04","02"),
                    "jenis_kelamin" => "L",
                    "pekerjaan" => "Arsitek",
                    "alamat" => "Jl. Bunga Kamboja No. 12"
                ],
                [
                    "nama" => "Rianti Kusuma",
                    "hubungan" => "Ibu",
                    "tanggal_lahir" => Carbon::create("1988","03","12"),
                    "jenis_kelamin" => "P",
                    "pekerjaan" => "Design Interior",
                    "alamat" => "Jl. Bunga Kamboja No. 12"
                ],
                [
                    "nama" => "Kania Salsabilla",
                    "hubungan" => "Anak",
                    "tanggal_lahir" => Carbon::create("2003","04","24"),
                    "jenis_kelamin" => "P",
                    "pekerjaan" => "Pelajar",
                    "alamat" => "Jl. Bunga Kamboja No. 12"
                ]
            ]
        );
    }
}
