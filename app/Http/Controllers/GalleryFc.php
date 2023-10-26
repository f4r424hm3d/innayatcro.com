<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryFc extends Controller
{
  public function index(Request $request)
  {
    $rows = Gallery::paginate(30)->withQueryString();
    $data = compact('rows');
    return view('front.gallery')->with($data);
  }
}
