<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.about-us');
  }
}
