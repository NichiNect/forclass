<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('author')->where('status', 'published')->latest()->get();

        return view('frontend.articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('status', 'published')->where('slug', $slug)->first();
        $articles = Article::with('author')->where('status', 'published')->latest()->limit(5)->get();

        return view('frontend.articles.show', compact('article', 'articles'));
    }
}
