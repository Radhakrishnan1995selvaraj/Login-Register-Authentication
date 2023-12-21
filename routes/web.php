<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\RegisterController;
use App\Http\Controllers\admin\LoginController;


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

Route::view('register','admin.register')->middleware('guest');

Route::post('store',[RegisterController::class,'store']);
Route::view('/','admin.login')->middleware('guest');

Route::view('home', 'home')->middleware('auth');

    
Route::view('login','admin.login')->middleware('guest')->name('login');

Route::post('authenticate',[LoginController::class,'authenticate']);
Route::get('logout',[LoginController::class,'logout']);
