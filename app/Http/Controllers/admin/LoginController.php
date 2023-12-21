<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function authenticate(Request $request){
       $request->validate([

        "email"=>"required|email",
        "password"=> "required"
       ]) ;

       $email = $request->input('email');
       $password = $request->input('password');


       if(Auth::attempt(['email' => $email, 'password' => $password])){


        $user = User::where('email', $email)->first();
        Auth::login($user);
    return redirect('home');
       }
       else {
      return back()->withErrors(['invalid credinetala']);
       }




    }


    public function logout(){

Auth::logout();
return redirect('login');

    }
}
