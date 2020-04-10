<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\House;
use \App\Picture;

class HouseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        return redirect()->route('hosuedetail',['house_id' => $house_id,'subjct' => 'listing' ]); 
    }

    public function show_house(Request $request)
    {
        $house = House::find($request->house_id);
        $house_id = $request->house_id;
        $subject = $request->subject;
        return view('host.housedetail',compact('house','subject','house_id'));
    }

    public function updatelisting(Request $request, $house_id, $subject)
    {
        $house = House::find($house_id);
        $house->update([
            'housetype' => $request->housetype,
            'roomtype' =>  $request->roomtype,
            'accommodate' =>  $request->accommodate,
            'bedrooms' =>  $request->bedrooms,
            'bathrooms' =>  $request->bathrooms,
        ]);
        return redirect()->route('hosuedetail',['subject' => $subject, 'house_id' => $house_id ]);
    }

    public function updateprice(Request $request, $house_id, $subject)
    {
        $house = House::find($house_id);
        $house->update([
            'price' => $request->price
        ]);
        return redirect()->route('hosuedetail',['subject' => $subject, 'house_id' => $house_id ]);
    }

    public function updatedescription(Request $request, $house_id, $subject)
    {
        $house = House::find($house_id);
        $house->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('hosuedetail',['subject' => $subject, 'house_id' => $house_id ]);
    }

    public function updatelocation(Request $request, $house_id, $subject)
    {
        $house = House::find($house_id);
        $house->update([
            'address' => $request->location
        ]);
        return redirect()->route('hosuedetail',['subject' => $subject, 'house_id' => $house_id ]);
    }

    public function updateamenities(Request $request, $house_id, $subject)
    {
        $house = House::find($house_id);
        $house->update([
            'amenitie1' => $request->amenities1 == 'on',
            'amenitie2' => $request->amenities2 == 'on',
            'amenitie3' => $request->amenities3 == 'on',
            'amenitie4' => $request->amenities4 == 'on',
            'amenitie5' => $request->amenities5 == 'on'
        ]);
        return redirect()->route('hosuedetail',['subject' => $subject, 'house_id' => $house_id ]);
    }

    public function updatephoto(Request $request, $house_id, $subject)
    {
        $imageName = time().".".$request->photos->getClientOriginalExtension();
        $path = "/avatars/".$imageName;
        $request->photos->move(public_path('avatars'), $imageName);
        
        Picture::create([
            'picture' => $path,
            'house_id' => $house_id
        ]);

        return redirect()->route('hosuedetail',['subject' => $subject, 'house_id' => $house_id ]);
    }

    public function delete_housepic($id)
    {
        $delete = Picture::destroy($id);
        return back();
    }

    public function publish($id)
    {
        $update = House::find($id);
        $update->update([
            'publish' => true
        ]);
        return back();
    }

    public function alllisting($id)
    {
        $listings = House::where('user_id',$id)->get();
        return view('host.listing',compact('listings'));
    }
}
