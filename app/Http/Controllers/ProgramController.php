<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    function kurir(){
        return view('program', [
            'judul' => 'Halaman Kurir' ]);
    }

    function magang(){
        return view('program', [
            'judul' => 'Halaman Magang' ]);
    }

    function kunjunganIndustri(){
        return view('program', [
            'judul' => 'Halaman Kunjungan Industri' ]);
    }
}
