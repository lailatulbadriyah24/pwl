<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        return view('product', [
            'judul' => 'Produk' ]);
    }


    public function marbel_edu_games()
    {
        return view('product', [
            'judul' => 'Marbel Edu Games' ]);
    }

    public function marbel_and_friends_kids_games()
    {
        return view('product', [
            'judul' => 'Marbel and Friends Kids Games' ]);
    }

    public function riri_story_books()
    {
        return view('product', [
            'judul' => 'Riri Story Books' ]);
    }

    public function kolak_kids_songs()
    {
        return view('product', [
            'judul' => 'Kolak Kids Songs' ]);
    }
}
