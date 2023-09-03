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

Route::get('/blog', [PostController::class, "index"]);
Route::get('posts/{slug}', [PostController::class, "show"]);

