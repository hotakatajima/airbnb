<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'housetype','roomtype','accommodate','bedrooms','bathrooms','price','name','description','amenitie1','amenitie2','amenitie3','amenitie4','amenitie5','address','publish','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function pictures()
    {
        return $this->hasMany('App\Picture');
    }

}