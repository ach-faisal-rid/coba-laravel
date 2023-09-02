<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

Route::get('/', function (){
    return view('home', [
        "title" => "home",
        "active" => "Home"
    ]);
});
Route::get('/about', function (){
    return view('tentang', [
        "name" => "faisal",
        "title" => "Tentang",
        "active" => "About",
        "email" => "thinkbear@gmail.com",
        "image" => "faisal.jpg",
        "alt" => "thinkbear"
    ]);
});

Route::get('/blog', function (){
    $blog_posts = [
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
    return view('posts', [
        "title" => "blog",
        "active" => "Blog",
        "posts" => $blog_posts
    ]);
});
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "active" => "Blog",
        "post" => $new_post
    ]);
});

