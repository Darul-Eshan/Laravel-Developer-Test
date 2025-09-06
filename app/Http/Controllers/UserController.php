<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function user_add()
   {
        return view('user.user-add');
   }
   public function user_save(Request $request)
   {
//       return $request;
      User::saveUser($request);
       return back()->with('success', 'User saved successfully');

   }
   public function user_manage()
   {
       return view('user.user-manage',[
           'users'=>User::all()
       ]);

   }
   public function user_edit($id)
   {
       return view('user.user-edit',[
          'user'=>User::find($id)
       ]);
   }
   public function user_update(Request $request)
   {
       User::updateUser($request);
       return back()->with('success', 'User updated successfully');
   }
   private static $user;
   public function user_delete($id)
   {
       self::$user=User::find($id);
       self::$user->delete();
       return redirect(route('user.manage'))->with('success','User deleted successfully');
   }
}
