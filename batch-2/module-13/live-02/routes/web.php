<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\Middleware\tokenVirificaiton;
use Illuminate\Support\Facades\Route;

Route::view('/registration','pages.auth.registration');
Route::view('/login','pages.auth.login');
Route::view('/profile','pages.dashboard.profile')->middleware([tokenVirificaiton::class]);
Route::view('/','home');


//registration
Route::post('/register',[UserController::class,'register'])->name('user.register');
//login
Route::post('/userLogin', [UserController::class, 'login']);
//profile
Route::get('/userPorfile',[UserController::class,'profile'])->middleware([tokenVirificaiton::class]);
//logout
Route::get('/logout',[UserController::class,'logout'])->middleware([tokenVirificaiton::class])->name('user.logout');

