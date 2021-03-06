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

Route::group(['middleware' => 'userCheck'],function(){

    Route::get('/','PersonController@read')->name('index');
    Route::get('/read','PersonController@read')->name('read');

    Route::get('/form/show','PersonController@showForm')->name('form.show');
    Route::post('/add/data','PersonController@add')->name('add.data');

    Route::get('/delete/{id}','PersonController@delete')->name('delete');

    Route::get('/edit/{id}','PersonController@edit')->name('edit.show');
    Route::post('/update/data/{id}','PersonController@update')->name('update.data');

    Route::get('/logout','LoginController@logout')->name('user.logout');
});




Route::get('/register','RegisterController@show')->name('user.register.show');
Route::post('/register','RegisterController@register')->name('user.register');

Route::get('/login','LoginController@show')->name('user.login.show');
Route::post('/login','LoginController@login')->name('user.login');


