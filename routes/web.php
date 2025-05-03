<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/signup',[ProfileController::class, 'signup'])->name('signup');
Route::get('/login',[ProfileController::class, 'login'])->name('login');
