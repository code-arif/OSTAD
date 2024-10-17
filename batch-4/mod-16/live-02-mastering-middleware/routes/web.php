<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\FlashController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//session
Route::get('/set-session',[DemoController::class,'setSession']);
Route::get('/get-session',[DemoController::class,'getSession']);
Route::get('/read-again',[DemoController::class,'readAgain']);
Route::get('/about',[DemoController::class,'about']);
Route::get('/update-session',[DemoController::class,'updateSession']);
Route::get('/delete-session',[DemoController::class,'deleteSession']);


//flash message or temporary session
Route::get('/set-flash-message',[FlashController::class,'setFlashMessage']);
Route::get('/get-flash-message',[FlashController::class,'getFlashMessage']);
Route::get('/read-flash-message',[FlashController::class,'readFlash'])->name('flash');
Route::get('/flash-redirect',[FlashController::class,'setFlashAndRedirect']);

//log management
Route::get('/set-log',[LogController::class,'logManagement']);


//dos-attract protect
Route::get('/dos-protect',[DemoController::class,'protect'])->middleware('throttle: 5, 1');
