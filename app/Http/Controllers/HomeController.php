<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\House;

class HomeController extends Controller
{
    public function index()
    {
        $houses = House::where('publish',true)->get();
        return view('welcome',compact('houses'));
    }
}
