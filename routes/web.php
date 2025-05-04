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
Route::post('/users', [UserController::class, 'store']);
