@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        <!-- Main Content -->
        <div class="lg:col-span-8">
            <div class="space-y-8">
                @foreach($articles as $article)
                <article class="group relative p-6 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center space-x-4 mb-4">
                        <!-- Author Avatar -->
                        @if($article->user && $article->user->profile_photo_url)
                            <img src="{{ $article->user->profile_photo_url }}" alt="{{ $article->user->name }}" class="w-10 h-10 rounded-full">
                        @else
                            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        @endif
                        
                        <!-- Author Name and Date -->
                        <div class="flex items-center text-sm">
                            <span class="font-medium text-gray-900">{{ $article->user ? $article->user->name : 'Anonymous' }}</span>
                            <span class="mx-2.5 text-gray-500">·</span>
                            <time class="text-gray-500">{{ $article->created_at->format('M d, Y') }}</time>
                        </div>
                    </div>

                    <!-- Article Content and Image -->
                    <div class="flex flex-col-reverse sm:flex-row sm:justify-between sm:items-start gap-6">
                        <div class="flex-1 space-y-3">
                            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 group-hover:text-[#85c226] leading-tight">
                                <a href="{{ route('articles.show', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h2>
                            <p class="text-gray-600 line-clamp-3">{{ $article->excerpt }}</p>
                            
                            <!-- Categories -->
                            @if($article->categories && $article->categories->isNotEmpty())
                            <div class="flex flex-wrap gap-2">
                                @foreach($article->categories as $category)
                                <a href="{{ route('categories.show', $category->slug) }}" 
                                   class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-[#85c226] text-black hover:bg-[#96d82c]">
                                    {{ $category->name }}
                                </a>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        
                        @if($article->thumbnail)
                        <div class="sm:ml-6 sm:w-48 sm:h-48 rounded-lg overflow-hidden">
                            <img src="{{ $article->thumbnail }}" 
                                 alt="{{ $article->title }}" 
                                 class="w-full h-full object-cover">
                        </div>
                        @endif
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $articles->links() }}
            </div>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-4 space-y-10">
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Discover More</h2>
                <div class="space-y-6">
                    @foreach($categories as $category)
                        <a href="{{ route('articles.category', $category->slug) }}" 
                           class="flex items-center justify-between p-4 rounded-xl hover:bg-gray-50 transition-colors group">
                            <span class="text-lg text-gray-700 group-hover:text-[#85c226]">{{ $category->name }}</span>
                            <span class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                                {{ $category->articles_count }} {{ Str::plural('Article', $category->articles_count) }}
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
