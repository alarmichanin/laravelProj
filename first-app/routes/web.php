<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ViewsController;

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
Route::get('/about',[ViewsController::class,'getAbout']);
Route::get('/contact',[ViewsController::class,'getContact']);
Route::get('/products',[ViewsController::class,'getProducts']);
Route::get('/products/{id}',[ProductsController::class,'getProduct'])->whereNumber('id');
Route::post('/products/{id}',[ProductsController::class,'addProduct'])->whereNumber('id');
