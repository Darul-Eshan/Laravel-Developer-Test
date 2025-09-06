<?php

namespace App\Http\Controllers;
use App\Models\State;
use App\Models\Country;

use Illuminate\Http\Request;

class StateController extends Controller
{
    private static $state;
    public function state_add()
    {
        return view('web-admin.state-add',[
            'countries'=>Country::where('status','=','1')->get(),]);

    }
    public function state_save(Request $request)
    {
       State::stateSave($request);
       return back()->with('success','State status added successfully');
    }
    public function state_manage()
    {
        return view('web-admin.state-manage', [
            'states' => State::all(),
        ]);
    }

    public function state_edit($id)
    {
        return view('web-admin.state-edit',[

            'state'=>State::find($id),
            'countries'=>Country::where('status','=','1')->get(),
        ]);
    }
    public function state_update(Request $request,$id)
    {
        State::stateUpdate($request, $id);
        return redirect(route('state.manage'))->with('success','State updated successfully');

    }
    public function state_delete(Request $request,)
    {
        self::$state=State::find($request->id);
        self::$state->delete();
        return redirect(route('state.manage'))->with('success','State deleted successfully');
    }
    public function state_status(Request $request,$id)
    {
        self::$state=State::find($id);
            if(self::$state->status==1){
                self::$state->status=0;
            }
            else{
                self::$state->status=1;
            }
            self::$state->save();
            return redirect(route('state.manage'))->with('success','State status updated successfully');
    }

}
