<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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



  public function create()
  {
    return view('create', [
      "title" => "Create Posts",
      "active" => "Post"
    ]);
  }

  public function store(Request $request)
  {
    $data = [
      "title" => $request->title,
      "excerpt" => Str::words($request->body),
      "body" => $request->body
    ];

    Post::create($data);
    return redirect('/posts');
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
