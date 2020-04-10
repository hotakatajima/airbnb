<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'picture', 'house_id'
    ];

}
