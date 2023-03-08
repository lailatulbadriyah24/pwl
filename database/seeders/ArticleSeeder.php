<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *s
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->insert(
            [
                [
                    'judul' => 'Mix and Match Flanel Bagi Wanita',
                    'penulis' => 'Laila',
                    'kategori' => 'Fashion',
                    'tahun_terbit' => '2022'
                ],
                [
                    'judul' => 'Dampak ChatGPT pada Pencarian Pengetahuan',
                    'penulis' => 'Dean Bjorn',
                    'kategori' => 'Teknologi',
                    'tahun_terbit' => '2021'
                ],
                [
                    'judul' => 'Aturan Pilih Program Studi di SNPMB 2023',
                    'penulis' => 'Alea Khiar',
                    'kategori' => 'Pendidikan',
                    'tahun_terbit' => '2023'
                ]
            ]);
    }
}
