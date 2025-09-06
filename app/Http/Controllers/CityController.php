<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use App\Models\city;


class CityController extends Controller
{
    private static $city;
        public function city_add()
        {
            return view('web-admin.city-add',[
                'countries' => Country::all(),
                'states' => State::all(),
            ]);
        }
        public function city_save(Request $request)
        {
           city::saveCity($request);
        }
        public function city_manage()
        {
            return view('web-admin.city-manage',[
                'cities' => city::all(),
            ]);
        }
        public function city_edit($id)
        {
            return view('web-admin.city-edit',[
                'city'=>city::find($id),
                'countries'=>Country::where('status','=','1')->get(),
                'states' => State::where('status','=','1')->get(),
            ]);
        }
        public function city_update(Request $request, $id)
        {
//           return $request;
              city::updateCity($request,$id);
            return redirect(route('city.manage'))->with('success','City updated successfully');
        }

        public function city_delete($id){
            self::$city=city::find($id);
            self::$city->delete();
            return redirect(route('city.manage'))->with('success','City deleted successfully');
        }
        public function city_status(Request $request,$id)
        {
            self::$city=city::find($id);
            if (self::$city->status==1){
                self::$city->status=0;
            }
            else{
                self::$city->status=1;
            }
            self::$city->save();
            return redirect(route('city.manage'))->with('success','City status updated successfully');

        }

}
