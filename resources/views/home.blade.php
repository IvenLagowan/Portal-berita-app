@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section with Featured Articles -->
    <div class="bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-16">
            <h1 class="text-4xl font-bold text-gray-900 mb-8 text-center">Berita & Pembaruan Terbaru</h1>
            
            @if($featured_articles->count() > 0)
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                    <!-- Main Featured Article -->
                    @if($featured_articles->first())
                        <div class="lg:col-span-8 relative group">
                            <a href="{{ route('articles.show', $featured_articles->first()->slug) }}" class="block">
                                <div class="relative rounded-2xl overflow-hidden aspect-[16/9]">
                                    @if($featured_articles->first()->thumbnail)
                                        <img src="{{ Storage::url($featured_articles->first()->thumbnail) }}" 
                                             alt="{{ $featured_articles->first()->title }}"
                                             class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    @endif
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent rounded-2xl"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6">
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-medium bg-[#85c226] text-white">
                                            {{ $featured_articles->first()->category->name }}
                                        </span>
                                        <h2 class="mt-4 text-3xl font-bold text-white group-hover:text-[#b4e454] transition-colors">
                                            {{ $featured_articles->first()->title }}
                                        </h2>
                                        <p class="mt-2 text-gray-200 line-clamp-2">
                                            {{ Str::limit($featured_articles->first()->excerpt ?? strip_tags($featured_articles->first()->content), 150) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Secondary Featured Articles -->
                        <div class="lg:col-span-4 grid grid-cols-1 gap-6">
                            @foreach($featured_articles->skip(1)->take(2) as $article)
                                <div class="relative group">
                                    <a href="{{ route('articles.show', $article->slug) }}" class="block">
                                        <div class="relative rounded-xl overflow-hidden aspect-[16/9]">
                                            @if($article->thumbnail)
                                                <img src="{{ Storage::url($article->thumbnail) }}" 
                                                     alt="{{ $article->title }}"
                                                     class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                            @else
                                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                            @endif
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-xl"></div>
                                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-[#85c226] text-white">
                                                    {{ $article->category->name }}
                                                </span>
                                                <h3 class="mt-2 text-lg font-semibold text-white group-hover:text-[#b4e454] transition-colors line-clamp-2">
                                                    {{ $article->title }}
                                                </h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @else
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <h3 class="mt-3 text-sm font-medium text-gray-900">Tidak ada artikel pilihan</h3>
                    <p class="mt-1 text-sm text-gray-500">Artikel pilihan akan muncul di sini setelah diterbitkan.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Latest Articles Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Berita Terbaru</h2>
                    <p class="mt-2 text-gray-600">Tetap perbarui dengan cerita terbaru kami</p>
                </div>
                <a href="{{ route('articles.index') }}" 
                   class="inline-flex items-center px-4 py-2 rounded-lg bg-[#85c226] text-white hover:bg-[#b4e454] transition-colors">
                    View all articles
                    <svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            @if($latest_articles->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($latest_articles as $article)
                        <div class="group">
                            <a href="{{ route('articles.show', $article->slug) }}" class="block">
                                <div class="relative rounded-xl overflow-hidden aspect-[16/9] mb-4">
                                    @if($article->thumbnail)
                                        <img src="{{ Storage::url($article->thumbnail) }}" 
                                             alt="{{ $article->title }}"
                                             class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                            <svg class="w-12 h-12 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    @endif
                                </div>
                                
                                <div>
                                    @if($article->category)
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-[#85c226] text-white">
                                            {{ $article->category->name }}
                                        </span>
                                    @endif

                                    <h3 class="mt-3 text-xl font-semibold text-gray-900 group-hover:text-[#b4e454] transition-colors line-clamp-2">
                                        {{ $article->title }}
                                    </h3>

                                    <p class="mt-2 text-gray-600 line-clamp-2">
                                        {{ $article->excerpt ?? strip_tags($article->content) }}
                                    </p>

                                    <div class="mt-4 flex items-center gap-6 text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <svg class="w-5 h-5 mr-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2z" clip-rule="evenodd" />
                                            </svg>
                                            {{ $article->created_at->format('M d, Y') }}
                                        </div>
                                        
                                        <div class="flex items-center">
                                            <svg class="w-5 h-5 mr-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd" />
                                            </svg>
                                            {{ ceil(str_word_count(strip_tags($article->content)) / 200) }} min read
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-gray-50 rounded-xl p-8 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.625 1.5H9a3.75 3.75 0 013.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 013.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 01-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875zm5.845 17.03a.75.75 0 001.06 0l3-3a.75.75 0 10-1.06-1.06l-1.72 1.72V12a.75.75 0 00-1.5 0v4.19l-1.72-1.72a.75.75 0 00-1.06 1.06l3 3z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">Belum ada artikel</h3>
                    <p class="mt-1 text-sm text-gray-500">Artikel akan muncul di sini setelah diterbitkan.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Categories Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Jelajahi Kategori</h2>
                <p class="mt-2 text-gray-600">Jelajahi artikel berdasarkan topik favorit Anda</p>
            </div>
            
            @if($categories->count() > 0)
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach($categories as $category)
                        <a href="{{ route('articles.category', $category->slug) }}" 
                           class="group relative overflow-hidden rounded-2xl bg-white shadow-sm hover:shadow-lg transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-br from-[#85c226]/0 to-[#85c226]/5 group-hover:to-[#85c226]/10 transition-colors"></div>
                            <div class="relative p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-semibold text-gray-900 group-hover:text-[#85c226] transition-colors">
                                        {{ $category->name }}
                                    </h3>
                                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-[#85c226] text-white text-sm font-medium">
                                        {{ $category->articles_count }}
                                    </span>
                                </div>
                                <div class="flex items-center text-gray-600 group-hover:text-[#85c226] transition-colors">
                                    <span>Jelajahi artikel</span>
                                    <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="bg-white rounded-2xl shadow-sm p-8 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.625 1.5H9a3.75 3.75 0 013.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 013.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 01-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875zm5.845 17.03a.75.75 0 001.06 0l3-3a.75.75 0 10-1.06-1.06l-1.72 1.72V12a.75.75 0 00-1.5 0v4.19l-1.72-1.72a.75.75 0 00-1.06 1.06l3 3z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="mt-3 text-sm font-medium text-gray-900">Belum ada kategori</h3>
                    <p class="mt-1 text-sm text-gray-500">Kategori akan muncul di sini setelah dibuat.</p>
                </div>
            @endif
        </div>
    </div>
@endsection