<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');

});
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('home',['as'=>'home', 'uses'=>'Admin\HomeController@home']);
});
Route::group(['prefix'=>'user','as'=>'user.'], function(){
    Route::get('home',['as'=>'home', 'uses'=>'User\UserController@home']);
});

