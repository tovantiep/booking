<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
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
    Route::get('login',['uses'=>'Admin\AuthController@login'])->name('auth.login');
    Route::post('login',['uses'=>'Admin\AuthController@checkLogin'])->name('check.login');
    Route::get('register',['uses'=>'Admin\AuthController@register'])->name('auth.register');
    Route::post('register',['uses'=>'Admin\AuthController@checkRegister'])->name('check.register');
    
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
        Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');
    });

Route::group(['middleware' => ['auth']], function () {
Route::group(['middleware' => ['verified']], function () {
    Route::group(['prefix'=>'admin','middleware'=>'admin.login','as'=>'admin.'], function(){
        Route::get('logout',['uses'=>'Admin\AuthController@logout'])->name('auth.logout');
            Route::group(['prefix'=>'category','as'=>'category.'], function(){
                Route::get('index',['uses'=>'Admin\CategoryController@index'])->name('index');
                Route::get('create',['uses'=>'Admin\CategoryController@create'])->name('create');
                Route::post('store',['uses'=>'Admin\CategoryController@store'])->name('store');
                Route::get('edit/{id}',['uses'=>'Admin\CategoryController@edit'])->name('edit');
                Route::put('update/{id}',['uses'=>'Admin\CategoryController@update'])->name('update');
                Route::get('delete/{id}',['uses'=>'Admin\CategoryController@delete'])->name('delete');
            });
        Route::group(['prefix'=>'room','as'=>'room.'], function(){
                Route::get('index',['uses'=>'Admin\RoomController@index'])->name('index');
                Route::get('create',['uses'=>'Admin\RoomController@create'])->name('create');
                Route::post('store',['uses'=>'Admin\RoomController@store'])->name('store');
                Route::get('edit/{id}',['uses'=>'Admin\RoomController@edit'])->name('edit');
                Route::put('update/{id}',['uses'=>'Admin\RoomController@update'])->name('update');
                Route::get('delete/{id}',['uses'=>'Admin\RoomController@delete'])->name('delete');
            });
        Route::get('home',['uses'=>'Admin\HomeController@home'])->name('home');
        });
    }); 
});
    Route::group(['prefix'=>'user','as'=>'user.'], function(){
        Route::get('home',['uses'=>'User\UserController@home'])->name('home');
        Route::get('room',['uses'=>'User\UserController@listRoom'])->name('room');
        Route::get('booking',['uses'=>'User\UserController@booking'])->name('booking');
        Route::get('logout',['uses'=>'User\UserController@logout'])->name('auth.logout');
    });


