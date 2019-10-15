<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function dashboard(){
        return view('index');
    }

    public function addContact(){
        return view('layouts.addContact');
    }

    public function allContact(){
        return view('layouts.allContact');
    }
    
}
