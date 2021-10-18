<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\logincontroller;

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
    return view('userview.signup-in.signin');
})->name('home');
Route::get('/Dashboard', function () {
    return view('userview.home');
})->middleware('pagevalidation');
Route::get('/user/home/{id}', [usercontroller::class, 'Home'])->middleware('pagevalidation');
Route::get('/signup', [usercontroller::class, 'signup'])->name('/signuppage');
Route::post('/Registertion', [usercontroller::class, 'sigpupform'])->name('/Registertion');
Route::post('/Dashboard', [logincontroller::class, 'loginform'])->name('/Dashboard');
Route::get('/user/profile/{id}',[usercontroller::class,'profile'])->middleware('pagevalidation');
Route::post('/Edit', [usercontroller::class, 'editSubmit'])->name('/Edite');
Route::get('/logout', [logincontroller::class, 'logout'])->name('/logout');


