<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;	
use App\Http\Controllers\CreateTable;

Route::get('/', function () {
    return view('welcome');
});
				
Route::resource('products', ProductController::class);			
Route::get('products', [ProductController::class, 'index']) -> name('products.index');

Route::get('index', [PageController::class, 'getIndex']) -> name(('trang-chu'));

// Create table in database
Route::get('createTable', [CreateTable::class, 'table']);