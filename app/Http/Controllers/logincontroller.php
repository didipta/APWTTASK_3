<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class logincontroller extends Controller
{
    public function loginform(Request $request)
    {
        $validate=$request->validate([

             'email'=>'required',
             'password'=>'required'
        ],
        [
            'email.required'=>'Please put your email',
            'password.required'=>'Please put your password'
        ]
        
        );
        $email=$request->email;
        $password=$request->password;
        $User = User::select('*')->where('email',$email)->where('password',$password)->get();
        $count=$User->count();


        if ($count>0) {
            $User = User::select('*')->where('email',$email)->where('password',$password)->first();

            $request->session()->put('username',$User->Username);

            return view("userview.home",['user'=>$User]);
        
        }
       else {
        return view("userview.signup-in.signin");
       }
    }

    public function logout(){
        session()->forget('username');
        return view("userview.signup-in.signin");
    }
}
