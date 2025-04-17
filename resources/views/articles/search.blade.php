@extends('layouts.app')

@section('title', 'Search Results - News Articles')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="border-b border-gray-200 pb-4 mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Search Results</h1>
            <p class="mt-2 text-gray-600">Showing results for "{{ $query }}"</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($articles as $article)
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="{{ route('articles.show', $article->slug) }}">
                        @if($article->thumbnail)
                            <img src="{{ Storage::url($article->thumbnail) }}" 
                                 alt="{{ $article->title }}" 
                                 class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                        <div class="p-6">
                            <div class="flex items-center mb-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#85c226]/10 text-[#85c226]">
                                    {{ $article->category->name }}
                                </span>
                                <span class="mx-2 text-gray-500">&middot;</span>
                                <time datetime="{{ $article->created_at->toIso8601String() }}" class="text-sm text-gray-500">
                                    {{ $article->created_at->format('M d, Y') }}
                                </time>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $article->title }}</h2>
                            <p class="text-gray-600 line-clamp-3">
                                {{ $article->excerpt ?? Str::limit(strip_tags($article->content), 150) }}
                            </p>
                            <div class="mt-4 flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="text-sm font-medium text-gray-900">{{ $article->author->name }}</span>
                                </div>
                                <div class="ml-auto flex space-x-4 text-sm text-gray-500">
                                    <span>{{ $article->views }} views</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">No articles found matching your search.</p>
                    <a href="{{ route('articles.index') }}" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-[#85c226] hover:bg-[#b4e454]">
                        View All Articles
                    </a>
                </div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $articles->appends(['q' => $query])->links() }}
        </div>
    </div>
@endsection
