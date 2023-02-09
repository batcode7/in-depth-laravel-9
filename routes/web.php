<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\userController;
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

Route::get('/partha', function () {
    return view('welcomePartha');
});
/* when hitting the /partha endpoint the closure will be executed and it will return the view welcomePartha*/

Route::get('/bhoumik', [userController::class,'index']);  
/* when hitting the /bhoumik endpoint go to userController class and execute the index function do not forget to put the location of the controller at the beginning */