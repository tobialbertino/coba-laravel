<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'judul post pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Otong Surotong',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex exercitationem ducimus molestias iusto ut enim repellat rerum vel velit esse. Quidem eaque quod ut eveniet, tenetur enim debitis qui iusto, dolorum nihil minus. Magni voluptates maxime quis rem dolorum aliquam sint unde quos, excepturi cum placeat. Quibusdam qui optio veritatis accusamus quaerat hic, necessitatibus aliquam porro non at consequuntur et perferendis odio eos tempore voluptatibus esse, repellendus libero obcaecati quae mollitia distinctio. Facilis ducimus expedita voluptatibus unde totam et quam.',
        ],
        [
            'title' => 'judul post kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Mamang',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex exercitationem ducimus molestias iusto ut enim repellat rerum vel velit esse. Quidem eaque quod ut eveniet, tenetur enim debitis qui iusto, dolorum nihil minus. Magni voluptates maxime quis rem dolorum aliquam sint unde quos, excepturi cum placeat. Quibusdam qui optio veritatis accusamus quaerat hic, necessitatibus aliquam porro non at consequuntur et perferendis odio eos tempore voluptatibus esse, repellendus libero obcaecati quae mollitia distinctio. Facilis ducimus expedita voluptatibus unde totam et quam.',
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
