<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AboutFc extends Controller
{
  public function index(Request $request)
  {
    //$services = Service::orderBy('id','desc')->limit(10)->get();
    $services = Service::all();
    $data = compact('services');
    return view('front.about-us')->with($data);
  }
}
