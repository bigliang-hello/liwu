<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Gift;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $articles = Article::all()->take(12);
        $gifts = Gift::all()->take(12);
        return view('index', compact('categories', 'articles', 'gifts'));
    }
}
