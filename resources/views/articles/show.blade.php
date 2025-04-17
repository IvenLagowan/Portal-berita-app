@extends('layouts.app')

@section('title', 'News Articles')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <article class="max-w-screen-xl mx-auto">
            <div class="max-w-3xl mx-auto article-content">
                <!-- Category and Date -->
                <div class="flex items-center space-x-4 mb-6">
                    <a href="{{ route('articles.category', $article->category->slug) }}" 
                       class="text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full text-sm font-medium hover:bg-emerald-100 transition">
                        {{ $article->category->name }}
                    </a>
                    <time datetime="{{ $article->created_at->toIso8601String() }}" 
                          class="text-gray-500 text-sm">
                        {{ $article->created_at->format('F d, Y') }}
                    </time>
                </div>

                <!-- Title and Excerpt -->
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 leading-tight mb-6">
                    {{ $article->title }}
                </h1>

                @if($article->excerpt)
                    <p class="text-xl text-gray-600 leading-relaxed mb-8">
                        {{ $article->excerpt }}
                    </p>
                @endif

                <!-- Author and Article Meta -->
                <div class="flex items-center justify-between py-6 border-t border-b border-gray-100 mb-10">
                    <div class="flex items-center space-x-4">
                        <div class="h-12 w-12 rounded-full bg-gray-200 flex items-center justify-center">
                            <span class="text-lg font-medium text-gray-600">
                                {{ substr($article->author->name, 0, 1) }}
                            </span>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">{{ $article->author->name }}</p>
                            <p class="text-sm text-gray-500">Author</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-6 text-gray-500">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span>{{ number_format($article->views) }} views</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ $article->reading_time ?? '5' }} min read</span>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="mb-12">
                    <figure class="aspect-w-16 aspect-h-9 max-h-[480px] overflow-hidden">
                        @if($article->featured_image)
                            <img src="{{ Storage::url($article->featured_image) }}" 
                                 alt="{{ $article->title }}" 
                                 class="w-full h-full object-cover rounded-lg shadow-lg">
                        @else
                            <div class="w-full h-full bg-gray-100 rounded-lg shadow flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p class="mt-2 text-sm text-gray-500">No image available</p>
                                </div>
                            </div>
                        @endif
                        @if($article->image_credit)
                            <figcaption class="mt-2 text-sm text-gray-500 text-center">
                                {{ $article->image_credit }}
                            </figcaption>
                        @endif
                    </figure>
                </div>

                <!-- Social Share Sticky -->
                <div class="hidden lg:block fixed left-8 top-1/3 space-y-4">
                    <div class="flex flex-col items-center space-y-4">
                        <button onclick="copyToClipboard('{{ request()->url() }}')"
                                class="p-3 bg-gray-100 hover:bg-gray-200 rounded-full transition-colors duration-200 group relative">
                            <img src="https://raw.githubusercontent.com/gauravghongde/social-icons/master/SVG/Color/Link.svg" 
                                 alt="Copy Link" 
                                 class="w-5 h-5">
                            <span class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                Copy Link
                            </span>
                        </button>
                        
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                           target="_blank"
                           class="p-3 bg-white hover:bg-gray-50 rounded-full transition-colors duration-200 group relative shadow-sm">
                            <img src="https://raw.githubusercontent.com/gauravghongde/social-icons/master/SVG/Color/Facebook.svg" 
                                 alt="Facebook" 
                                 class="w-5 h-5">
                            <span class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                Share on Facebook
                            </span>
                        </a>
                        
                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(request()->url()) }}"
                           target="_blank"
                           class="p-3 bg-white hover:bg-gray-50 rounded-full transition-colors duration-200 group relative shadow-sm">
                            <img src="https://raw.githubusercontent.com/gauravghongde/social-icons/master/SVG/Color/Twitter.svg" 
                                 alt="Twitter" 
                                 class="w-5 h-5">
                            <span class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                Share on Twitter
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="prose prose-lg max-w-none">
                    <div class="prose-headings:font-serif prose-headings:font-bold prose-headings:text-gray-900 
                                prose-p:text-gray-700 prose-p:leading-relaxed 
                                prose-a:text-emerald-600 prose-a:no-underline hover:prose-a:text-emerald-700
                                prose-strong:text-gray-900 prose-strong:font-semibold
                                prose-blockquote:border-l-emerald-500 prose-blockquote:text-gray-700 prose-blockquote:italic
                                prose-ul:list-disc prose-ol:list-decimal">
                        {!! $article->content !!}
                    </div>
                </div>

                <!-- Mobile Share Buttons -->
                <div class="lg:hidden mt-8 mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Share this article</h3>
                    <div class="flex flex-wrap gap-3">
                        <button onclick="copyToClipboard('{{ request()->url() }}')"
                                class="flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition duration-200">
                            <img src="https://raw.githubusercontent.com/gauravghongde/social-icons/master/SVG/Color/Link.svg" 
                                 alt="Copy Link" 
                                 class="w-5 h-5 mr-2">
                            Copy Link
                        </button>

                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                           target="_blank"
                           class="flex items-center px-4 py-2 bg-white hover:bg-gray-50 text-gray-700 rounded-lg transition duration-200 border border-gray-200">
                            <img src="https://raw.githubusercontent.com/gauravghongde/social-icons/master/SVG/Color/Facebook.svg" 
                                 alt="Facebook" 
                                 class="w-5 h-5 mr-2">
                            Share on Facebook
                        </a>

                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(request()->url()) }}"
                           target="_blank"
                           class="flex items-center px-4 py-2 bg-white hover:bg-gray-50 text-gray-700 rounded-lg transition duration-200 border border-gray-200">
                            <img src="https://raw.githubusercontent.com/gauravghongde/social-icons/master/SVG/Color/Twitter.svg" 
                                 alt="Twitter" 
                                 class="w-5 h-5 mr-2">
                            Share on Twitter
                        </a>
                    </div>
                </div>

                <script>
                function copyToClipboard(text) {
                    navigator.clipboard.writeText(text).then(() => {
                        const notification = document.createElement('div');
                        notification.className = 'fixed bottom-4 right-4 bg-gray-800 text-white px-4 py-2 rounded-lg shadow-lg transform transition-transform duration-300 translate-y-0';
                        notification.textContent = 'Link copied to clipboard!';
                        document.body.appendChild(notification);
                        
                        setTimeout(() => {
                            notification.style.transform = 'translateY(100%)';
                            setTimeout(() => notification.remove(), 300);
                        }, 2000);
                    }).catch(err => {
                        console.error('Failed to copy text: ', err);
                    });
                }
                </script>
            </div>
        </article>
    </div>
@endsection