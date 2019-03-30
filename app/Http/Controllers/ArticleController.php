<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

    }

    public function show(Request $request, Article $article)
    {
        return view('articles.show', compact('article'));
    }
}
