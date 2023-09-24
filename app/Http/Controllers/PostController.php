<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class PostController extends Controller
{
  // Unutk menampilkan posts
  public function index()
  {
    return view('posts', [
      "title" => "Semua Postingan",
      "active" => "Post",
      "posts" => Post::latest()->get()
    ]);
  }

  // Untuk mengambil satu post sesuai paramater di route
  public function show(Post $post)
  {
    return view('post', [
      "title" => "Post",
      "active" => "Post",
      'post' =>  $post
    ]);
  }
}
