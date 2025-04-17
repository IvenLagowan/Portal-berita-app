<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Str::macro('readingTime', function ($content, $wordsPerMinute = 200) {
            $wordCount = str_word_count(strip_tags($content));
            $minutes = ceil($wordCount / $wordsPerMinute);
            return $minutes;
        });
    }
}
