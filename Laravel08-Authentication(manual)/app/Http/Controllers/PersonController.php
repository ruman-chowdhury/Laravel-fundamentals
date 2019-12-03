<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{
    //=========insert========
    public function showForm(){
        return view('pages.add');
    }

    public function add(Request $request){

        $request->validate([
            'name' => 'required|regex:/(^([a-zA-Z ]+)(\d+)?$)/u', //space after A-Z,it allows space
            'email' => 'required|email'

        ]);

       $per = new Person();
       $per->name = $request->name;
       $per->email = $request->email;
       $per->save();

       return redirect()->route('index');
    } //end insert



    //===============read=============
    public function read(){
        $allData = Person::all();

        $allUserData = Auth::user(); // $var = User::find( Auth::id() ); //will find authenticated user

        return view('index',compact(['allData','allUserData']));
    }



    //===============delete=============
    public function delete($id){
        $row = Person::find($id);
        $row->delete();

        return redirect()->route('index');
    }



//===============edit update=============
    public function edit($id){
        $row = Person::find($id);

        return view('pages.edit',compact('row'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'name' => 'required|regex:/(^([a-zA-Z ]+)(\d+)?$)/u',
            'email' => 'required|email'

        ]);

        $row =Person::find($id);
        $row->name = $request->name;
        $row->email = $request->email;
        $row->save();

        return redirect()->route('index');
    } //end insert


}
