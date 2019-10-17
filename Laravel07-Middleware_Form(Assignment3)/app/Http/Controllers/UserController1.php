<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController1 extends Controller
{

//==============person1==============
    public function getPerson1(){
        return view('pages.person1');
    }

    public function postPerson1(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['age'] = $request->age;

        echo $data['name']."<br>";
        echo $data['age'];

    }


//===============person2================
    public function getPerson2(){
        return view('pages.person2');
    }

    public function postPerson2(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['age'] = $request->age;

        echo $data['name']."<br>";
        echo $data['age'];

    }

//===============person2================
    public function getPerson3(){
        return view('pages.person3');
    }

    public function postPerson3(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['age'] = $request->age;

        echo $data['name']."<br>";
        echo $data['age'];

    }

    //================erorr==========
    public function errMessage(){
        return view('error.message');
    }


}
