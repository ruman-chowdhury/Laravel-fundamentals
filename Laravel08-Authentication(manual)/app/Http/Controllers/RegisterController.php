<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //show registration form
    public function show(){
        return view('user.register');
    }

    public function register(Request $request){

        $request->validate([
            'name' => 'required|regex:/(^([a-zA-Z ]+)(\d+)?$)/u', //space after A-Z,it allows space
            'email' => 'required|email|unique:users,email', //should be unique column of users db tbl
            'password' => 'required|confirmed|min:6'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); //to encrypt password
        $user->save();

        return redirect()->route('user.register.show')->with('msg','Registration successfull!');
    }


}
