<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    return view('dashboard.index', [
      "title" => "Dashboard",
      "active" => "Dashboard",
      "navActive" => "Dashboard"
    ]);
  }

  public function post()
  {
    return view('dashboard.index', [
      "title" => "Dashboard",
      "active" => "Dashboard",
      "navActive" => "Post"
    ]);
  }

  public function category()
  {
    return view('dashboard.index', [
      "title" => "Dashboard",
      "active" => "Dashboard",
      "navActive" => "Category"
    ]);
  }
}
