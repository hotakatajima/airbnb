<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'user_id', 'house_id', 'checkin_date', 'checkout_date', 'passed_day'
    ];
}
