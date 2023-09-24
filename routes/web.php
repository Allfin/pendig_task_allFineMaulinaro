<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardCategoryController;
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
// untuk melihat postingan diiginkan
Route::get('/posts/{post:slug}', [PostController::class, "show"]);


// untuk menampilkan semua nama category
Route::get('/categories', [CategoryController::class, "index"]);
// untuk melihat postingan yang memiliki category diiginkan
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

// index dashboard
Route::get('/dashboard', function () {
  return view('dashboard.index', [
    "title" => "My Post",
    "active" => "Dashboard",
    "navActive" => "Dashboard",
  ]);
});

// untuk memeriksa apakah slug postingan sudah ada atau belum
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, "checkSlug"]);
// route untuk DashboardPostController
Route::resource('/dashboard/posts', DashboardPostController::class);

// untuk memeriksa apakah slug categoru sudah ada atau belum
Route::get('/dashboard/category/checkSlug', [DashboardCategoryController::class, "checkSlug"]);
// route untuk DashboardCategoryController
Route::resource('/dashboard/category', DashboardCategoryController::class);
