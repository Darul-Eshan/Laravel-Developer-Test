<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\StateController;

class State extends Model
{
    private static $state;
    public static function stateSave($request)
    {
        $request ->validate([

                    "country_id" => "required",
            'name' => 'required',
            'description' => 'required',
        ],
            [

                'country_id.required' => "Country name is required",
                'name.required' => "Country name is required",
                'description.required' => "Country description is required",]
        );

        self::$state = new State();
        self::$state->country_id= $request -> country_id;
        self::$state->name=$request -> name;
        self::$state->description=$request -> description;
        self::$state->save();

    }
    public static function stateUpdate($request)
    {
        self::$state=State::find($request->id);
        self::$state->country_id= $request -> country_id;
        self::$state->name=$request -> name;
        self::$state->description=$request -> description;
        self::$state->save();
    }

    public function countries()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
