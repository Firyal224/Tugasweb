<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables ;
use DB;
use App\User;
use Illuminate\Support\Facades\Auth;
class SettingController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('setting/setting', [
            'user' => $request->user()
        ]);
            

    }

    public function update_user(Request $request)
    {

        $id = Auth::user()->id;
        // dd($id);
 
         $this->validate($request, [
 
        'oldpassword' => 'required',
        'newpassword' => 'required',
        ]);
 
 
 
       $hashedPassword = Auth::user()->password;
 
       if (\Hash::check($request->oldpassword , $hashedPassword )) {
 
         if (!\Hash::check($request->newpassword , $hashedPassword)) {
 
            //   $users =admin::find(Auth::user()->id);
            //   $new= bcrypt($request->newpassword);
            $post   =    DB::table('users')
            ->where('id', $id)  // find your user by their email
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'password'=> bcrypt($request->newpassword)
            ]); 
 
             
            }
 
            else{
                //   session()->flash('message','new password can not be the old password!');
                //   return redirect()->back();
                // dd("new password can not be the old password!");
                }
 
           }
 
          else{
            //    session()->flash('message','old password doesnt matched ');
            //    return redirect()->back();
            //    dd("old password doesnt matched ");
             }
             
        return response()->json($post);
    }
}
