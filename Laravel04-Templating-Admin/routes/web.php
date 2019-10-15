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

Route::get('/', function(){
    return view('index');
});

//url to pages
Route::get('/dashboard', 'CustomController@dashboard');
Route::get('/addContact', 'CustomController@addContact');
Route::get('/allContact', 'CustomController@allContact');

