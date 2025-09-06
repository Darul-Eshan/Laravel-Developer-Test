<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AdminController;
use Livewire\Attributes\Validate;

class Country extends Model
{
    private static $country, $imgUrl,$image, $imageNewName, $directory;
    public static function saveCounty($request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            "name.required" => "Country name is required",
            "description.required" => "Country description is required",
            "image.required" => "Country image is required",
        ]);
        self::$country= new Country();
        self::$country->name="$request->name";
        self::$country->description=$request->description;
        if ($request->hasFile('image')) {
            self::$country->image=self::getImgUrl($request);
        }
            self::$country->save();
    }
    public static function getImgUrl($request)
    {
        self::$image= $request->file('image');
        self::$imageNewName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory='web-assets/country-img';
        self::$imgUrl = self::$directory . '/' . self::$imageNewName;
        if (!file_exists(self::$directory)) {
            mkdir(self::$directory, 0777, true);
        }
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
    public static function updateCounty($request)
    {
        self::$country=Country::find($request->id);
        self::$country->name=$request->name;
        self::$country->description=$request->description;
        if ($request->hasFile('image')) {
            if (file_exists(self::$country->image)) {
                unlink(self::$country->image);
            }
            self::$country->image=self::getImgUrl($request);
        }
        self::$country->save();

    }
}
