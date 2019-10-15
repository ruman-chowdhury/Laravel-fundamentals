<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//=================Routes without controller====================

Route::get('/', function (){
    return "Hello Laravel!";
});


Route::get('/name', function(){
	$name ="Ruman Chowdhury";
	return $name;
});


Route::get('/sum',function(){
	$x = 7;
	$y = 5;
	$sum = ($x + $y);

	return $sum;
});


Route::get('/array', function(){
	$arr = array(5224,'Ruman Chowdhury', 'Manikganj');
	return $arr;
});

Route::get('/msg', function(){
	$msg = "Some basic routes in laravel.";
	return $msg;
});


//=================Routes with controller====================

Route::get('/name2', 'CustomController@displayName');

//parameter should be string,Putting something into 2nd bracket is reffered parameter
Route::get('surname/{surname}', 'CustomController@displaySurname')->where('surname','[A-Za-z]+');
Route::get('/fullname/{firstname}/{lastname}', 'CustomController@displayFullName')->where(['firstname'=>'[A-Za-z]+', 'lastname'=>'[A-Za-z]+']);


Route::get('/sum2', 'CustomController@displaySum');
Route::get('/var1/{x}/var2/{y}', 'CustomController@displayAvg')->where(['var1'=>'[0-9]+', 'var2'=>'[0-9]+']);

Route::get('/array2', 'CustomController@displayArray');

Route::get('/msg2', 'CustomController@displayMsg');

	
//=================Routes in view====================

Route::get('/person', function (){
   return view('person');
});

Route::get('/student', function (){
    return view('inc.student'); //use dot or slash
});

Route::get('/admin', function (){
    return view('inc/helper/admin');
});

Route::get('/user', function (){
    return view('user');
});

Route::get('/arrayView', 'CustomController@viewArray');

