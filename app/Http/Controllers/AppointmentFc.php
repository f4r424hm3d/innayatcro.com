<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentFc extends Controller
{
  public function index(Request $request)
  {
    $treatments = Treatment::all();
    //$users = User::all();
    $data = compact('treatments');
    return view('front.appointment')->with($data);
  }
}
