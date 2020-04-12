<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Reservation;
use Auth;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function reservation($user_id, $house_id, Request $request)
    {
        Reservation::create([
            'user_id' => $user_id,
            'house_id'=> $house_id,
            'checkin_date'=> $request->checkin,
            'checkout_date'=> $request->checkout,
            'passed_day' => 0
        ]);

        return back();
    }

    public function yourtrip($id)
    {
        $now = new Carbon('today', 'Asia/Tokyo');
        $trips = Reservation::where('user_id',$id)->where('checkout_date', '<' ,$now)->get();
        return view('history.trip',compact('trips'));
    }

    public function yourreservation($id)
    {
        $now = new Carbon('today', 'Asia/Tokyo');
        $reservations = Reservation::where('user_id',$id)->where('checkout_date', '>=' ,$now)->get();
        return view('history.reservation',compact('reservations'));
    }

}
