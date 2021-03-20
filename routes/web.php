<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserAuth;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[UserController::class,'login_user']);
Route::get('/logout',[UserController::class,'logout']);

// Route::group(['middleware'=>['UserAuth']],function()
// {
Route::get('/product', function () {
     if(!session()->has('data'))
     {
     	return redirect('login');
     }
     Route::get('/product',[ProductController::class,'index']);        // return redirect('product');
});
Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::get('/search',[ProductController::class,'search']);
Route::post('/add-to-cart',[ProductController::class,'addToCart']);

