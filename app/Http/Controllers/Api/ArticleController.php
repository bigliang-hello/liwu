<?php

namespace App\Http\Controllers\Api;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        dd(Auth::user());
        $article = new Article();
        $article->fill($request->all());
        $article->user_id = Auth::id();
        $article->save();
    }
}
