<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Tobi Albertino',
        //     'email' => 'tobi@gmail.com',
        //     'password' => bcrypt('12345') 
        // ]);
        
        User::create([
            'name' => 'Otong Surotong',
            'username' => 'otong',
            'email' => 'otong@gmail.com',
            'password' => bcrypt('password') 
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-Keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti sed amet asperiores commodi cum hic voluptatem? Consequatur, illum odio!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
