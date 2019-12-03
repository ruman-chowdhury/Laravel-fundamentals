<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //show login form
    public function show(){
        return view('user.login');
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required', //email should be exist in db
            'password' => 'required'
        ]);

        //we can also use request helper method, 'email' => request('email')
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            return redirect()->route('index');

        }else{
            return redirect()->route('user.login.show')->with('msg','Email or Password is incorrect!');
        }

      //  return redirect()->route('user.register.show');
    }


    public function logout(){

        Auth::logout();

        return redirect()->route('user.login.show');

    }


}
