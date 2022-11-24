<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = \App\Models\User::factory(10)->create();

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        $hobby = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies',
        ]);

        Post::create([
            'category_id' => $hobby->id,
            'user_id' => $user->id,
            'title' => 'My First Post',
            'slug' => 'my-first-post',
            'lead' => 'bla-bla-bla',
            'body' => 'bla bla bla',
        ]);

        Post::create([
            'category_id' => $hobby->id,
            'user_id' => $user->id,
            'title' => 'My Second Post',
            'slug' => 'my-second-post',
            'lead' => 'bla-bla-bla',
            'body' => 'bla bla bla',
        ]);
    }
}
// My favorite in ascii art:
//
//  _   _      _ _        __        __         _     _ _
// | | | | ___| | | ___   \ \      / /__  _ __| | __| | | ___
// | |_| |/ _ \ | |/ _ \   \ \ /\ / / _ \| '__| |/ _` | |/ _ \
// |  _  |  __/ | | (_) |   \ V  V / (_) | |  | | (_| | |  __/
// |_| |_|\___|_|_|\___( )   \_/\_/ \___/|_|  |_|\__,_|_|\___|
//                     |/
//
