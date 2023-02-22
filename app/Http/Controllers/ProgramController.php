<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    function kurir(){
        return 'Halaman Kurir';
    }

    function magang(){
        return 'Halaman Magang';
    }

    function kunjunganIndustri(){
        return 'Halaman Kunjungan Industri';
    }
}
