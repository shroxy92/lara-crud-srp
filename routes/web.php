<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [\App\Http\Controllers\RegisterController::class, 'allUsers']);
Route::get('/create', [\App\Http\Controllers\RegisterController::class, 'createUser']);
