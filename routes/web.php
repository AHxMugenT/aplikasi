<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home', [
        "title" => "AM MEMBERSHIP"
    ]);
});

Route::get('/member', function () {
    return view('home.member', [
        "title" => "AM | MEMBER",
        "name" => "Muhammad Faruq Azhar",
        "email" => "faruqazhar5@gmail.com",
        "image" => "am.jpeg"
    ]);
});

Route::get('/categories', function () {
    return view('home.categories', [
        "title" => "Post Categories",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('home.category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});


Route::get('/blog',[PostController::class,'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.layouts.index');
})->middleware('auth');

Route::get('/posts', [DashboardPostController::class, 'index'])->middleware('auth');

Route::resource('/dashboard.home.posts', DashboardPostController::class)->middleware('auth');
