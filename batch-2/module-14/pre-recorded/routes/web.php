<?php

use App\Http\Controllers\dashbaordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

//web API Route
Route::post('/userRegistraion',action: [UserController::class,'UserRegistraion']);
Route::post('/userLogin',[UserController::class,'UserLogin']);
Route::post('/send-otp',[UserController::class,'SendOTP']);
Route::post('/otp-verify',[UserController::class,'VerifyOTP']);
//token verification
Route::post('/reset-pass',[UserController::class,'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);

//page route
Route::get('/',[HomeController::class,'index']);
Route::get('/user-login',[UserController::class,'loginShow'])->name('show.login');
Route::get('/user-registration',[UserController::class,'registrationShow'])->name('show.registration');
Route::get('/send-otp',[UserController::class,'showSendOTP'])->name('send.otp');
Route::get('/verify-otp',[UserController::class,'showVerifyOTP']);
Route::get('/reset-password',[UserController::class,'showResetPassword']);
Route::get('/dashboard',[dashbaordController::class,'showDashboard']);
