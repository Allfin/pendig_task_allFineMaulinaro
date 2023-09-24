<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
  {
    return view('category', [
      "title" => "Semua Category",
      "active" => "Category",
      "posts" => Category::latest()->get(),
    ]);
  }

  public function show(Category $category)
  {
    return view('posts', [
      "title" => "Semua Category : $category->name",
      "active" => "Category",
      'posts' =>  $category->post
    ]);
  }
}
