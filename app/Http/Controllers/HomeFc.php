<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeFc extends Controller
{
  public function index(Request $request)
  {
    $blogs = Blog::limit(3)->inRandomOrder()->get();
    $data = compact('blogs');
    return view('front.index')->with($data);
  }
}
