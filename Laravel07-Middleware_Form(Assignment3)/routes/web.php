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

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/person1','UserController1@getPerson1');
Route::post('/person1/data','UserController1@postPerson1')->middleware('checkPerson1Info');

Route::get('/person2','UserController1@getPerson2');
Route::post('/person2/data','UserController1@postPerson2')
    ->name('show.data')->middleware('checkPerson2Info');

Route::get('/person3','UserController1@getPerson3');
Route::post('/person3/data','UserController1@postPerson3')->middleware('checkPerson3Info');

//Erorr route
Route::get('/errMessage','UserController1@errMessage');