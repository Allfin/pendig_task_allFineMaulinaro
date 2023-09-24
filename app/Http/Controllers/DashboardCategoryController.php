<?php

namespace App\Http\Controllers;


use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

use App\Models\Category;

class DashboardCategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view("dashboard.category.index", [
      "title" => "Category",
      "active" => "Dashboard",
      "navActive" => "Category",
      "categories" => Category::latest()->get()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('dashboard.category.create', [
      "title" => "Category",
      "active" => "Dashboard",
      "navActive" => "Category",
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
      "name" => "required|max:20|unique:categories",
      "slug" =>  "required|unique:categories"
    ]);
    Category::create($validatedData);
    return redirect('/dashboard/category')->with('success', 'Category has been added!');
  }

  /**
   * Display the specified resource.
   */
  public function show(Category $category)
  {
    return view('dashboard.category.show', [
      "title" => "My Post",
      "active" => "Dashboard",
      "navActive" => "Category",
      "posts" => $category->post,
      "category" => $category
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Category $category)
  {
    return view('dashboard.category.edit', [
      "title" => "Edit Category",
      "active" => "Dashboard",
      "navActive" => "Category",
      "category" => $category,
      "categories" => Category::latest()->get()
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Category $category)
  {
    $validatedData = $request->validate([
      "name" => "required|max:20|unique:categories",
      "slug" =>  "required|unique:categories"
    ]);
    Category::where('id', $category->id)
      ->update($validatedData);
    return redirect('/dashboard/category')->with('success', 'Category has been updated!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function destroy(Category $category)
  {
    Category::destroy($category->id);
    return redirect('/dashboard/category')->with('success', 'Category has been deleted!');
  }

  // untuk cek slug sudah ada atau belum
  public function checkSlug(Request $request)
  {
    $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
    return response()->json(['slug' => $slug]);
  }
}
