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