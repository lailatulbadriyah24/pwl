<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        return "Halaman Kategori";
    }

    public function marbel_edu_games()
    {
        return "Halaman Marbel Edu Games";
    }

    public function marbel_and_friends_kids_games()
    {
        return "Halaman Marbel and Friends Kids Games";
    }

    public function riri_story_books()
    {
        return "Halaman Riri Story Books";
    }

    public function kolak_kids_songs()
    {
        return "Halaman Kolak Kids Songs";
    }
}
