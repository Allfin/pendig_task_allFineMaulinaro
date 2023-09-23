<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
  public function index()
  {
    return view('posts', [
      "title" => "Post",
      "posts" => Post::latest()->get()
    ]);
  }
  public function show(Post $post)
  {
    return view('post', [
      "title" => "Post",
      'post' =>  $post
    ]);
  }
}
