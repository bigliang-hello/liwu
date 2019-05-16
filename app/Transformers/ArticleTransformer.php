<?php
/**
 * Created by PhpStorm.
 * User: jc-mac
 * Date: 2019/5/10
 * Time: 上午11:48
 */

namespace App\Transformers;

use App\Article;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
{
    public function transform(Article $article)
    {
        return [
            'id' => $article->id,
            'title' => $article->title,
            'content' => $article->content,
            'cover' => $article->cover,
            'category' =>$article->category->name,
            'created_at' => $article->created_at->toDateTimeString(),
            'updated_at' => $article->updated_at->toDateTimeString(),
        ];
    }
}