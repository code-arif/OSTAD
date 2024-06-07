<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/registration','pages.auth.registration');
Route::view('/login','pages.auth.login');
Route::view('/profile','pages.dashboard.profile');
Route::view('/','home');


//registration
Route::post('/registration',[UserController::class,'register'])->name('user.register');