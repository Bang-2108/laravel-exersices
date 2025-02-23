<?php

use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [SignupController::class, 'displayInfor']);
Route::post('/signup', [SignupController::class, 'displayInfor']);