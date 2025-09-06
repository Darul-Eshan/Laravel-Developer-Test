<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    private static $city;
    public static function saveCity($request)
    {
        $request->validate([

            'country_id'=>'required',
            'state_id'=>'required',
            'name'=>'required',
            'description'=>'required'
        ],
        [
            'country_id.required'=>'Please select country',
            'state_id.required'=>'Please select city',
            'name.required'=>'Please enter name',
            'description.required'=>'Please enter description'
        ]);
        self::$city=new City();
        self::$city->country_id=$request->country_id;
        self::$city->state_id=$request->state_id;
        self::$city->name="$request->name";
        self::$city->description=$request->description;
        self::$city->save();
    }

    public function countries()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
    public function states()
    {
        return $this->belongsTo(State::class,'state_id');
    }
    public static function updateCity($request,$id )
    {
        self::$city=City::find($request->id);
        self::$city->country_id = $request->country_id;
        self::$city->state_id=$request->state_id;
        self::$city->name=$request->name;
        self::$city->description=$request->description;
        self::$city->save();
    }

}
