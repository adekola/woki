<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function country()
    {
       return $this->belongsTo('App\Country');
    }

    public function districts()
    {
        return $this->hasMany('App\District');
    }

    public function shops()
    {
        return $this->hasManyThrough('App\Shop', 'App\District');
    }
}
