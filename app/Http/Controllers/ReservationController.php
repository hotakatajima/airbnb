<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Reservation;
use Auth;

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
}
