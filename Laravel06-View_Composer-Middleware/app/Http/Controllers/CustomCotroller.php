<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomCotroller extends Controller
{
    public function home(){
        $name = "Ruman Chowdhury";
        $proffession = "web developer";

        return view('index',compact(['name','proffession']));
    }

    public function services(){
        return view('pages.services');
    }
    
    public function about(){
        return view('pages.about');
    }
    
    public function contact(){
        return view('pages.contact');
    }    
}
