<?php

use App\Http\Controllers\demoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//match route
Route::match(['get','post'],'/check',[demoController::class,'getCountries']);

//query string with match vard
Route::match(['get', 'post'],'/queryString',[demoController::class,'queryString']);

