<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function locations()
    {
        $this->belongsToMany('App\District')->withPivot('street_address', 'location_coordinates');
    }
}
