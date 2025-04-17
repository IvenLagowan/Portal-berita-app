<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $featured_articles = Article::with(['category', 'author'])
            ->published()
            ->featured()
            ->latest()
            ->take(5)
            ->get();

        $latest_articles = Article::with(['category', 'author'])
            ->published()
            ->latest()
            ->take(12)
            ->get();

        $categories = Category::withCount('articles')->get();

        return view('home', compact('featured_articles', 'latest_articles', 'categories'));
    }
}
