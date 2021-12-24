<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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
    return view('test');
});
// Route::get('/',[LoginController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
// Route::get('/login',[HomeController::class,'index']);
Route::post('/login',[LoginController::class,'checkLogin']);
// Route::post('/home',[HomeController::class,'index']);
//Logout
Route::post('/logout',[LogoutController::class,'logout']);
//them moi thong tin 
Route::get('/register',[RegisterController::class,'index']);
Route::post('/addinformation',[RegisterController::class,'insert']);