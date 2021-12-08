<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\User\UserController;
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
Route::prefix('admin')->group(function(){
    Route::get('home',[HomeController::class, 'home'])->name('admin.home.home');
});
Route::prefix('user')->group(function(){
    Route::get('home',[UserController::class, 'home'])->name('user.home.home');
});
