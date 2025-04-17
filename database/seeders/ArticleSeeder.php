<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an admin user if it doesn't exist
        $admin = \App\Models\User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );

        // Get all categories
        $categories = \App\Models\Category::all();

        // Sample articles for each category
        foreach ($categories as $category) {
            for ($i = 1; $i <= 3; $i++) {
                \App\Models\Article::create([
                    'title' => "Sample {$category->name} Article {$i}",
                    'slug' => strtolower("sample-{$category->name}-article-{$i}"),
                    'excerpt' => "This is a sample excerpt for {$category->name} article {$i}.",
                    'content' => "
                        <h2>Introduction</h2>
                        <p>This is a sample article in the {$category->name} category. It demonstrates the layout and formatting of articles on our news portal.</p>
                        
                        <h2>Main Content</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        
                        <h2>Conclusion</h2>
                        <p>Thank you for reading this sample article. Stay tuned for more {$category->name} news and updates!</p>
                    ",
                    'category_id' => $category->id,
                    'user_id' => $admin->id,
                    'status' => 'published',
                    'is_featured' => $i === 1, // First article in each category is featured
                    'views' => rand(10, 1000),
                    'published_at' => now()->subDays(rand(1, 30)),
                ]);
            }
        }
    }
}
