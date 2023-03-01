<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function profile() {
        return view(('profile'))
        ->with('nama','Lailatul Badriyah')
        ->with('jurusan','Mahasiswa Teknik Informatika')
        ->with('nim','2141720036')
        ->with('absen','16')
        ->with('kelas','2A');
    }
}
