<?php

use App\Http\Controllers\demoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',[demoController::class,'Hello']);
Route::get('/download',[demoController::class,'download']);
Route::get('/queryString',[demoController::class,'queryString']);
Route::get('/queryString',[demoController::class,'practice']);

