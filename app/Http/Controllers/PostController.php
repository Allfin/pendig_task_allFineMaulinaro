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
      "title" => "Posts",
      "active" => "Post",
      "posts" => Post::latest()->get()
    ]);
  }


  // Untuk menambah post
  public function create()
  {
    return view('create', [
      "title" => "Create Posts",
      "active" => "Post"
    ]);
  }

  // Push data ke base
  public function store(Request $request)
  {
    return $request;
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

  public function checkSlug(Request $request)
  {
    $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
    return response()->json(['slug' => $slug]);
  }
}
