<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\City;
use Illuminate\Support\Facades\DB;


class Search extends Controller
{
    // Gets a shop to eat $what in $place - typically a district/city - country is inferred therefrom
    public function EatIn($what, $place)
    {
      //purpose of this method is to find all the shops in a city where do = 'eat' and what = $what

      // what values can place have? Let's start with just cities and subsequently we can progress to prune it down to the districts level

       //get the place from city table
       $place = DB::table('cities')->where('city_name', 'like' $place.'%' )->first();

       //then get the relevant shops from shoplocation
       if($place){
         //working down from a given City, get shops and districts in it ($place) where do = 'eat' and what = $what
         $shops = App\City::find(1)->shops()->where('do', 'eat')->where('what', $what)->get();

         //not sure this query will work...gotta seed the db first..
         // that's what's next
       }
    }

    public function BuyIn($what, $place)
    {
        //get the place from districts or city table

       //then get the relevant shops from shoplocation
    }
}
