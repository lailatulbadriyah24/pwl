<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function index() {
        return 'Selamat Datang';
    }

    function about() {
        return 'NIM: 2141720036 || Nama: Lailatul Badriyah';
    }

    function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
