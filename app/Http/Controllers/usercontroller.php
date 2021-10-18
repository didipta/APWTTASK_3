<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function signup()
    {
        
        return view('userview.signup-in.signup');
    }
    public function sigpupform(Request $request)
    {
        $validate=$request->validate([

            'name'=>'required',
            'phonenumber'=>'required|numeric',
            'username'=>'required|max:10',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x]).*$/',
            'cpassword'=>'required_with:password|same:password'
            
       ],
       [
           'name.required'=>'Please put your name',
           'name.regex'=>'Please put Only letter',
           'phonenumber.required'=>'Please put your Phone number',
           'phonenumber.unique'=>'Phone is alrealy exists',
           'phonenumber.numeric'=>'Please put Number',
           'phonenumber.min'=>'Please put only 11 digits',
           'username.required'=>'Please put your username',
           'username.min'=>'username is only 10 character',
           'username.unique'=>'username is alrealy exists',
           'email.required'=>'Please put your Email',
           'email.unique'=>'Email is alrealy exists',
           'password.min'=>'Please least 8 or more characters',
           'password.regex'=>'number,uppercase,lowercase letter must',
           'password.required'=>'Please put 8 special character password',
           'cpassword.same'=>'confirm password not match',
           

           
           
       ]
       
       );
       $var = new User();
       $var->name= $request->name;
       $var->Phonenumber= $request->phonenumber;
       $var->Username= $request->username;
       $var->email= $request->email;
       $var->password= $request->password;
       $var->save();
        return view("userview.signup-in.signup");
        
    }

    
    public function profile(Request $request){
      
        $id = $request->id;
        $User = User::where('id',$id)->first();
        return view('userview.profile')->with('user', $User);

    }

    public function editSubmit(Request $request){
        $User = User::where('id',$request->id)->first();
        $User->name= $request->name;
        $User->Phonenumber= $request->phonenumber;
        $User->Username= $request->username;
        $User->email= $request->email;
        $User->save();
        return view("userview.profile")->with('user', $User);

    }

    public function Home(Request $request){
      
        $User = User::where('id',$request->id)->first();

            $request->session()->put('username',$User->Username);

            return view("userview.home",['user'=>$User]);

    }

 
}
