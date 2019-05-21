<?php

namespace App\Http\Controllers\Api;

use App\Article;
use App\Transformers\ArticleTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::when($keyword = $request->keyword, function ($query) use ($keyword){
            $query->where('title', 'like', '%'.$keyword.'%');
        })->orderBy('created_at', 'desc')->paginate(10);

        return $this->response->paginator($articles, new ArticleTransformer());
    }

    public function store(Request $request)
    {
        $data = array_merge($request->all(), [
            'user_id' => Auth::id(),
        ]);
        $article = new Article();
        $article->fill($data);
        $article->save();
        return $this->response->item($article, new ArticleTransformer());
    }

    public function edit(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        return $this->response->item($article, new ArticleTransformer());
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->fill($request->all());
        $article->update();
        return $this->response->item($article, new ArticleTransformer());
    }

    public function destroy($id)
    {
        Article::findOrFail($id)->delete();
        return $this->response->noContent();
    }
}
