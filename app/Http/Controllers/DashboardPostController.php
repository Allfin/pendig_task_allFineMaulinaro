<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

use App\Models\Category;
use App\Models\Post;

class DashboardPostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   */
  public function index()
  {
    return view('dashboard.post.index', [
      "title" => "My Post",
      "active" => "Dashboard",
      "navActive" => "Post",
      "posts" => Post::latest()->get()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('dashboard.post.create', [
      "title" => "Create new post",
      "active" => "Dashboard",
      "navActive" => "Post",
      "categories" => Category::latest()->get()
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'title' => 'required|max:255',
      'category_id' => 'required',
      'body' => 'required'
    ]);

    $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 300));

    Post::create($validatedData);
    return redirect('/dashboard/posts')->with('success', 'New pos has been added!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Post  $post
   *
   */
  public function show(Post $post)
  {
    return view('dashboard.post.show', [
      "title" => "My Post",
      "active" => "Dashboard",
      "navActive" => "Post",
      "post" => $post
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function edit(Post $post)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Post $post)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post)
  {
    //
  }

  public function checkSlug(Request $request)
  {
    $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
    return response()->json(['slug' => $slug]);
  }
}
