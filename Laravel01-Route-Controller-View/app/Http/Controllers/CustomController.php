<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{

    public function displayName(){
        $name = "Joe Root";
        return $name;
    }

    public function displayFullName($firstName,$lastName){
        return "My name is ".$firstName." ".$lastName;
    }
    public function displaySurname($surname){
        return "My Surname is ".$surname;
    }            


    public function displaySum(){
        $x = 30;
        $y = 50;
        $sum = ($x + $y);

        return $sum;
    }

    public function displayAvg($x,$y){
        $avg = ($x + $y)/2;
        return $avg;
    }

    public function displayArray(){
        $arr = array(476, 'Umme Habiba', 'Savar');
        return $arr;
    }


    public function displayMsg(){
        $msg = "Routing with controller in laravel.";
        return $msg;
    }


    //===================view=================
    public function viewArray(){
        $arr = array(476, 'Umme Habiba', 'Savar');
        return view('userData', ['key'=>$arr]);
    }

}
