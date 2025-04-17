<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with(['category', 'author'])
            ->published()
            ->latest()
            ->paginate(12);

        $categories = Category::withCount('articles')->get();

        return view('articles.index', compact('articles', 'categories'));
    }

    public function show($slug)
    {
        $article = Article::with(['category', 'author'])
            ->published()
            ->where('slug', $slug)
            ->firstOrFail();

        // Increment view count
        $article->increment('views');

        $related_articles = Article::with(['category', 'author'])
            ->published()
            ->where('category_id', $article->category_id)
            ->where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();

        return view('articles.show', compact('article', 'related_articles'));
    }

    public function byCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        
        $articles = Article::with(['category', 'author'])
            ->published()
            ->where('category_id', $category->id)
            ->latest()
            ->paginate(12);

        return view('articles.category', compact('category', 'articles'));
    }

    public function search()
    {
        $query = request('q');
        
        $articles = Article::with(['category', 'author'])
            ->published()
            ->where('title', 'like', "%{$query}%")
            ->orWhere('content', 'like', "%{$query}%")
            ->latest()
            ->paginate(12);

        return view('articles.search', compact('articles', 'query'));
    }
}
