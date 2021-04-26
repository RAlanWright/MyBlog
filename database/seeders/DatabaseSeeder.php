<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Below is not needed if DB not refreshed at the start
//        User::truncate();
//        Category::truncate();
//        Post::truncate();

        $user = User::factory()->create([
            'name' =>'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
    }
}
