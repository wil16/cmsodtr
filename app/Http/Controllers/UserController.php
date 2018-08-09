<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Image;
use App\User;

class UserController extends Controller
{
      public function profile(){
        $department = Auth::user()->getDeptName;
      return view('profile', array('user' => Auth::user()), ['department'=>$department] );
    }

    public function update_imgprofile(Request $request){
      // Handle user upload profile image
      if($request->hasFile('profile_img')){
        $profile_img = $request->file('profile_img');
        $filename = time() . '.' . $profile_img->getClientOriginalExtension();
        Image::make($profile_img)->resize(300, 300)->save(public_path('/images/profile/' . $filename));

        $user = Auth::user();
        $user->profile_img = $filename;
        $user->save();
      }
      return view('profile', array('user' => Auth::user()));
    }

}
