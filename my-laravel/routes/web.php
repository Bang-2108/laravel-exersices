<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;	

Route::get('/', function () {
    return view('welcome');
});
				
Route::resource('products', ProductController::class);			
Route::get('products', [ProductController::class, 'index']) -> name('products.index');

Route::get('layoutCut', [PageController::class, 'getIndex']) -> name(('trang-chu'));

// Cake Shop
Route::get('slide', [PageController::class, 'getSlide']) -> name('trang-chu');
Route::get('category',[PageController::class,'getLoaiSp']);
Route::get('/loai_sp/{type}', [PageController::class, 'getLoaiSP']);

Route::get('homepage', [PageController::class,'getIndex']);
Route::get('/type/{id}', [PageController::class, 'getLoaiSp']);