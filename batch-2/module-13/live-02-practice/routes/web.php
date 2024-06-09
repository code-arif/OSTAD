<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');


//register
Route::get('/register',[UserController::class,'showRegister'])->name('register.show');
Route::post('/registration',[UserController::class,'register'])->name('register');

//login
Route::get('/login',[UserController::class,'showLogin'])->name('login.show');
// Route::post('/login',[UserController::class,'login'])->name('login.show');


//profile
Route::get('/profile',[ProfileController::class,'showProfile'])->name('profile.show');
Route::get('/editProfile',[ProfileController::class,'showEditProfile'])->name('edit.profile.show');



