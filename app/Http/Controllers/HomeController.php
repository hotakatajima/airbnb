<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\House;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $houses = House::where('publish',true)->get();
        return view('welcome',compact('houses'));
    }

    public function eachhouse($id)
    {
        $house = House::find($id);
        return view('house.eachhouse',compact('house'));
    }
}
