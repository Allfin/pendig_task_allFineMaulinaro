<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
  public function index()
  {
    return view('posts', [
      "title" => "Posts",
      "active" => "Post",
      "posts" => Post::latest()->get()
    ]);
  }
  public function show(Post $post)
  {
    return view('post', [
      "title" => "Post",
      "active" => "Post",
      'post' =>  $post
    ]);
  }
}
