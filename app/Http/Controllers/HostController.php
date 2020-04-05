<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\House;
use Auth;

class HostController extends Controller
{
    public function index(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->update([
            'status' => 'host'
        ]);
        return view('host.index');
    }

    public function indexindex()
    {
        return view('host.index');
    }

    public function create_house(Request $request)
    {
     
        $newhosue = House::create([
            'housetype' => $request->housetype,
            'roomtype' =>  $request->roomtype,
            'accommodate' =>  $request->accommodate,
            'bedrooms' =>  $request->bedrooms,
            'bathrooms' =>  $request->bathrooms,
            'user_id' => $request->id
        ]);

        $house_id = $newhosue->id;
        $subject = $request->subject;

        return redirect()->route('hosuedetail',['house_id' => $house_id,'subjct' => 'Listing' ]); 
    }

    public function show_house(Request $request)
    {
        $house = House::find($request->house_id);
        $house_id = $request->house_id;
        $subject = $request->subject;
        return view('host.housedetail',compact('house','subject','house_id'));
    }
}
