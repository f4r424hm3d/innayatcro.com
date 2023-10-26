<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.contact-us');
  }
  public function thankYou(Request $request)
  {
    return view('front.thank-you');
  }
}
