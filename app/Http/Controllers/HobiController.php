<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    //
    function index(){
        $hobi = Hobi::all();
        return view('hobi')->with('hobi',$hobi);
    }
}
