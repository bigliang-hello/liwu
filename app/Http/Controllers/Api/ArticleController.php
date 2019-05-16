<?php

namespace App\Http\Controllers\Api;

use App\Article;
use App\Transformers\ArticleTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(10);;

        return $this->response->paginator($articles, new ArticleTransformer());
    }

    public function store(Request $request)
    {
        $article = new Article();
        $article->fill($request->all());
        $article->user_id = Auth::id();
        $article->save();

        return $this->response->item($article, new ArticleTransformer());
    }
}
