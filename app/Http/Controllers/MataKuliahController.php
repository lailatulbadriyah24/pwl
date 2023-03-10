<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    //
    function index(){
        $mata_kuliah = MataKuliah::all();
        return view('mata_kuliah')->with('mata_kuliah',$mata_kuliah);
    }
}
