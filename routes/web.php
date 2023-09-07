<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Models\Category;

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
Route::get('posts/{post:slug}', [PostController::class, "show"]);

Route::get("categories", function () {
    return view('categories', [
        "title" => 'Post Category',
        "active" => "Category",
        "categories" => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category){
    return view('category', [
        "title" => $category->name,
        "active" => "Category",
        'posts' => $category->posts,
        "category" => $category->name
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        "title" => "blog",
        "active" => "blog",
        "posts" => $author->posts,
    ]);
});
