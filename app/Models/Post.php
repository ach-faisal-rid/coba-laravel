<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "author" => "faisal",
            "slug" => "judul-pertama",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, omnis blanditiis natus nisi enim praesentium adipisci magnam ab iure consequuntur distinctio",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, omnis blanditiis natus nisi enim praesentium adipisci magnam ab iure consequuntur distinctio, recusandae beatae reprehenderit ad earum consequatur. Esse sit ratione fugit eligendi quisquam repellendus corrupti possimus beatae! Dicta sit ab optio, natus necessitatibus laboriosam eligendi, pariatur, voluptatibus voluptates dolore a. Voluptatem numquam molestias itaque id modi animi officiis possimus quis consequatur quisquam, recusandae aliquid! Rerum aliquam voluptatem voluptates sed. Adipisci fuga, sapiente atque, enim at in obcaecati tempora beatae laudantium voluptate aperiam excepturi delectus recusandae nemo aliquam deleniti temporibus itaque? Modi, quod voluptate. Omnis, dolor eveniet nemo aliquam amet iusto."
        ],
        [
            "title" => "judul kedua",
            "author" => "teguh pertama",
            "slug"=> "judul-ke-dua",
            "excerpt" => "Corrupti, omnis blanditiis natus nisi enim praesentium adipisci magnam ab iure consequuntur distinctio, recusandae beatae reprehenderit ad earum consequatur. Esse sit ratione fugit eligendi quisquam repellendus corrupti",
            "body" => " Corrupti, omnis blanditiis natus nisi enim praesentium adipisci magnam ab iure consequuntur distinctio, recusandae beatae reprehenderit ad earum consequatur. Esse sit ratione fugit eligendi quisquam repellendus corrupti possimus beatae! Dicta sit ab optio, natus necessitatibus laboriosam eligendi, pariatur, voluptatibus voluptates dolore a. Voluptatem numquam molestias itaque id modi animi officiis possimus quis consequatur quisquam, recusandae aliquid! Rerum aliquam voluptatem voluptates sed."
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
