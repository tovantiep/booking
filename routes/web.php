<?php

use App\Models\Category;
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
    Route::group(['prefix'=>'category','as'=>'category.'], function(){
        Route::get('index',['name'=>'index', 'uses'=>'Admin\CategoryController@index'])->name('index');
        Route::get('create',['name'=>'create', 'uses'=>'Admin\CategoryController@create'])->name('create');
        Route::post('store',['name'=>'store', 'uses'=>'Admin\CategoryController@store'])->name('store');
        Route::get('edit/{id}',['name'=>'edit', 'uses'=>'Admin\CategoryController@edit'])->name('edit');
        Route::put('update/{id}',['name'=>'update', 'uses'=>'Admin\CategoryController@update'])->name('update');
        Route::get('delete/{id}',['name'=>'delete', 'uses'=>'Admin\CategoryController@delete'])->name('delete');
    });
    Route::get('home',['name'=>'home', 'uses'=>'Admin\HomeController@home'])->name('home');
});

Route::group(['prefix'=>'user','as'=>'user.'], function(){
    Route::get('home',['name'=>'home', 'uses'=>'User\UserController@home']);
});


