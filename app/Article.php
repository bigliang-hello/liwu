<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'category_id', 'reply_count', 'view_count','like_count', 'order', 'cover', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
