<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function register(Request $request){
     
       //Validate
       $fields = $request->validate([
        'username' => ['required', 'max:255'],
         'email' => ['required', 'max:255', 'email', 'unique:users'],
         'password' => ['required', 'min:3', 'confirmed'],
       ]);

       //Register
       $user = User::create($fields);

       //Login
       Auth::login($user);
 
      //Redirect
      return redirect()->route('dashboard'); 
   }
   public function login(Request $request){
          $fields = $request->validate([
         'email' => ['required', 'max:255', 'email'],
         'password' => ['required'],
       ]);

    //    dd($request);

    // Try to login with the user.
    if(Auth::attempt($fields, $request->remember)){
        return redirect()->intended('dashboard');
    }else{
        return back()->withErrors([
            'failed' => 'The provided credentials do not match our record.'
        ]);
    }

   }

   //Logout
   public function logout(Request $request){
     Auth::logout();

     $request->session()->invalidate();
     $request->session()->regenerateToken();

     return redirect('/');
   }
}
