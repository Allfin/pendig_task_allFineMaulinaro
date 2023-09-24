<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Models\Category;
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

// untuk menampilkan semua nama postingan
Route::get('/posts', [PostController::class, "index"]);
Route::get('/posts/{post:slug}', [PostController::class, "show"]);


// untuk menampilkan semua nama category
Route::get('/categories', [CategoryController::class, "index"]);
// untuk melihat postingan yang yang diiginkan
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

// untuk memeriksa apakah slug sudah ada atau belum
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, "checkSlug"]);
// route untu DashboardPostController
Route::resource('/dashboard/posts', DashboardPostController::class);
