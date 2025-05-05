<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/signup',[UserController::class, 'signup'])->name('signup');
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/users', [UserController::class, 'store'])->name('register');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');
