<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    function index(){
        $articles = Article::all();
        return view('article')->with('articles',$articles);
    }
}
