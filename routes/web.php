<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
  return view('home', [
    "title" => "Home",
    "active" => "Home"
  ]);
});

Route::get('/posts', [PostController::class, "index"]);

Route::get('/posts/create', [PostController::class, "create"]);

Route::post('/posts/create', [PostController::class, "store"]);

Route::get('/posts/checkSlug', [PostController::class, "checkSlug"]);

// Route::get('/posts/update', [PostController::class, "create"]);
Route::get('/posts/{post:slug}', [PostController::class, "show"]);

Route::get('/categories', function () {
  return view('categories', [
    "title" => "Category",
    "active" => "Category"
  ]);
});
