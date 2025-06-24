<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [\App\Http\Controllers\RegisterController::class, 'allUsers'])->name('home');
Route::get('/create', [\App\Http\Controllers\RegisterController::class, 'createUser'])->name('home.createForm');
Route::get('/edit/{id}', [\App\Http\Controllers\RegisterController::class, 'editUserForm'])->name('home.editUserForm');
Route::put('/edit/{id}', [\App\Http\Controllers\RegisterController::class, 'updateUser'])->name('home.editForm');
Route::get('/show/{id}', [\App\Http\Controllers\RegisterController::class, 'showUser'])->name('home.showForm');
Route::delete('/destroy/{id}', [\App\Http\Controllers\RegisterController::class, 'deleteuser'])->name('home.delete');
