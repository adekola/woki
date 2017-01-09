<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function shops()
    {
        return $this->belongsToMany('App\Shop')->withPivot('street_address', 'location_coordinates');
    }
}
