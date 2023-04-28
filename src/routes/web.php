<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Models\Address;
use App\Models\Product;
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

Route::get('/login',function(){
    return 'login first';
})->name('login');

Route::get('/customers',function(){
   $address = Customer::has('address','>=',4)->get();

   return $address;

});

Route::get('/products',function(){
    $address = Product::all();

 });
 
