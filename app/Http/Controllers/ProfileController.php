<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    public function profile()
    {
        $mypro = User::all();
        return view('profiles.profile');
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();
        $user->name = $request['name'];
        $user->address = $request['address'];
        $user->phone = $request['phone'];
        $user->save();

        session()->flash('message','Profile Update successfully! ');
        return view('profiles.profile');
    }

    public function changePasswordform()
    {
       
        return view('profiles.change_password');
    }

    public function updatePassword(Request $req)
    {
      $req->validate([
          'current_password' => 'required|min:8',
          'new_password' => 'required|min:8',
          'confirm_password' => 'required|same:new_password',
      ]);

      $current_user = Auth()->user();

      if(Hash::check($req->current_password,$current_user->password)){

        $current_user->update([

            'password' => bcrypt($req->new_password)
        ]);

        return redirect()->back()->with('message','Password Update successfully! ');

      }else {
          return redirect()->back()->with('error', 'Current Password does not match !');
      }

        
    }

}
