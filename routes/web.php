<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

//Route::get('/products',[ProductController::class,'index']);
//
//Route::get('/products/create',[ProductController::class,'create'])->name('create');
//Route::post('/products/create',[ProductController::class,'store']);
//
//
//Route::get('/products/edit/{product}',[ProductController::class,'edit']);
//Route::put('/products/update/{product}',[ProductController::class,'update'])->name('update');
Route::resource('/products',ProductController::class);

Route::get('/categories',[CategoryController::class,'index'])->middleware('admin');


