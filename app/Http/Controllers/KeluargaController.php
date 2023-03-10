<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    //
    function index(){
        $keluarga = Keluarga::all();
        return view('keluarga')->with('keluarga',$keluarga);
    }
}
