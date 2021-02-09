<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class CarsController extends Controller
{
  public function index() {

    // select all Cars
    $cars = Cars::all();
    // dd($cars);


    return view('home', compact('cars'));
  }
}
