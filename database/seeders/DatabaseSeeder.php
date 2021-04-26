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
        User::truncate();
        Category::truncate();
        Post::truncate();

         $user = User::factory()->create();

        // For local testing purposes only
         $personal = Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit tempus, torquent odio ornare congue laoreet porttitor interdum. Nisl tortor pharetra risus metus fames phasellus aptent vel augue, semper sodales sagittis cubilia curabitur ante primis quam egestas pellentesque, suscipit blandit faucibus aliquam nulla accumsan lectus at. Tellus dictumst sed morbi nam curae mus mauris arcu, praesent himenaeos rutrum in fermentum ac. Bibendum velit iaculis condimentum auctor ad sociosqu netus massa montes, cum ultrices aliquet ridiculus lacus convallis magna id, cras pulvinar commodo donec mattis tempor erat nisi. Vivamus varius non natoque etiam quisque, sociis eu neque duis imperdiet, dui sollicitudin lobortis turpis.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit tempus, torquent odio ornare congue laoreet porttitor interdum. Nisl tortor pharetra risus metus fames phasellus aptent vel augue, semper sodales sagittis cubilia curabitur ante primis quam egestas pellentesque, suscipit blandit faucibus aliquam nulla accumsan lectus at. Tellus dictumst sed morbi nam curae mus mauris arcu, praesent himenaeos rutrum in fermentum ac. Bibendum velit iaculis condimentum auctor ad sociosqu netus massa montes, cum ultrices aliquet ridiculus lacus convallis magna id, cras pulvinar commodo donec mattis tempor erat nisi. Vivamus varius non natoque etiam quisque, sociis eu neque duis imperdiet, dui sollicitudin lobortis turpis.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit tempus, torquent odio ornare congue laoreet porttitor interdum. Nisl tortor pharetra risus metus fames phasellus aptent vel augue, semper sodales sagittis cubilia curabitur ante primis quam egestas pellentesque, suscipit blandit faucibus aliquam nulla accumsan lectus at. Tellus dictumst sed morbi nam curae mus mauris arcu, praesent himenaeos rutrum in fermentum ac. Bibendum velit iaculis condimentum auctor ad sociosqu netus massa montes, cum ultrices aliquet ridiculus lacus convallis magna id, cras pulvinar commodo donec mattis tempor erat nisi. Vivamus varius non natoque etiam quisque, sociis eu neque duis imperdiet, dui sollicitudin lobortis turpis.</p>'
        ]);

    }
}
