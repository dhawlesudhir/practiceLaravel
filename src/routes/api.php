<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('products',ProductController::class);
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

// ways to use middleware
// 1
Route::middleware('auth:sanctum')->group(function(){
    Route::get('/products/search/{name}',[ProductController::class,'search']);
    Route::get('/logout',[AuthController::class,'logout']);
});

// 2
// Route::middleware('auth:sanctum')->get('/pro1',function(){
//     echo "hishsdh";
// });

// 3
// Route::get('pro2',function(){
//     echo "pro2";
// })->middleware('auth:sanctum');
