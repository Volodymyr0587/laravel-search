<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $users = User::all();

        for ($i = 1; $i <= 20; $i++) {
            Post::create([
                "title" => "Post $i",
                "description" => "This is the description of Post $i",
                "category_id" => $categories->random()->id,
                "user_id" => $users->random()->id,
            ]);
        }
    }
}
