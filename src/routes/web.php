<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/{user?}', function ($user=0) {
   return view('home.login',['user'=>$user]);
});

Route::get('/contact',function(){
    return view('home.contact');
});

Route::view('/testpage','home.home',['name'=>'xyz']);