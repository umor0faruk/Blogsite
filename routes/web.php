<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Controller;
use App\Http\Controllers\Frontend\ProductController;

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
Route::get('/',[ProductController::class,'home']);
Route::get('/addproduct',[ProductController::class,'addproduct'])->name("addproduct");
Route::post('/productstor',[ProductController::class,'productstor'])->name("productstor");
Route::get('/showproduct',[ProductController::class,'showproduct'])->name("showproduct");
Route::get('/editproduct/{id}',[ProductController::class,'editproduct'])->name("editproduct");
Route::post('/update/{id}',[ProductController::class,'update'])->name("update");
Route::get('/delete/{id}',[ProductController::class,'delete'])->name("delete");
Route::get('/ststus/{id}',[ProductController::class,'ststus'])->name("ststus");

// Route::get('/addproduct','App\Http\Controllers\Frontend\ProductController@addproduct')->name("addproduct");
// Route::POST('/productstore','App\Http\Controllers\Frontend\ProductController@productstore')->name("productstore");


// Route::get('/', function () {
//     return view('frontend/welcome');
// })->name("welcome");


// Route::get('/home', function () {
//     return view('frontend/home');
// })->name("home");


// Route::get('/about', function () {
//     return view('frontend/about');
// })->name("about");
