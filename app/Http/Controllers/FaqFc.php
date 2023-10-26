<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.faq');
  }
}
