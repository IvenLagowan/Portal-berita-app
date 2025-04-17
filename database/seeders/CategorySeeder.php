<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'Latest news and updates from the tech world',
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
                'description' => 'Business news, market updates, and economic insights',
            ],
            [
                'name' => 'Health',
                'slug' => 'health',
                'description' => 'Health tips, medical breakthroughs, and wellness advice',
            ],
            [
                'name' => 'Entertainment',
                'slug' => 'entertainment',
                'description' => 'Movies, music, celebrities, and pop culture news',
            ],
            [
                'name' => 'Sports',
                'slug' => 'sports',
                'description' => 'Sports news, scores, and athlete updates',
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
