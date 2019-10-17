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

Route::get('/',function(){
    return view('welcome');
});

Route::get('/home', 'CustomCotroller@home');
Route::get('/services', 'CustomCotroller@services')->middleware('checkUserInfo');

//group route
/*
Route::group('prefix=>user', function(){

    Route::get('/home', 'CustomCotroller@home');
    Route::get('/services', 'CustomCotroller@services');

}); 
*/

//group route and middleware
Route::group(['prefix' => 'admin','middleware'=>'checkUserInfo'], function (){
    
    Route::get('/about', 'CustomCotroller@about');
    Route::get('/contact', 'CustomCotroller@contact');

});


