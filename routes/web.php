<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use \App\Http\Controllers\DashboardPostController;
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
        "active" => "Categories",
        "categories" => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function (){
    return view('dashboard.index');
})->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
