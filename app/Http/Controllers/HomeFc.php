<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.index');
  }
}
