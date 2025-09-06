<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class AdminController extends Controller
{
    private static $country;
    public function dashboard(){
        return view('web-admin.home');
    }
    public function forms()
    {
        return view('web-admin.forms');
    }
    public function country_add()
    {
        return view('web-admin.country-add');
    }
    public function country_manage()
    {
        return view('web-admin.country-manage',[
            'countries' => Country::all()
      ]);
    }

    public function country_save(Request $request)
    {
        Country::saveCounty($request);
        return back()->with('success','County saved successfully');
    }

    public function country_edit($id)
    {
        return view('web-admin.country-edit',[
            'country'=>Country::find($id)
        ]);
    }

    public function country_update(Request $request,$id)
    {
        Country::updateCounty($request,$id);
        return redirect(route('country.manage'))->with('success','County updated successfully');
    }
    public function country_delete(Request $request,$id)
    {
        self::$country=Country::find($request->id);
        if (file_exists(self::$country->country_image)){
            unlink(self::$country->country_image);
        }
        self::$country->delete();
        return back()->with('success','County deleted successfully');
    }
    public function country_status(Request $request,$id)
    {
        self::$country=Country::find($id);
            if(self::$country->status==1){
                self::$country->status=0;
            }
            else{
                self::$country->status=1;
            }
            self::$country->save();
            return redirect(route('country.manage'))->with('success','County status updated successfully');
    }



}
