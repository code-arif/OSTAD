<?php

use App\Http\Controllers\demoController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//throttling or rate limiting
/*
Route::get('/hello', function () {
    return ('hello I am throttling');
})->middleware('throttle:5,1');
*/


//request blocking
/*
Route::get('/block',function(){
    return"I am block request";
})->middleware('simple');
*/

//route group with middleware
//multiple middleware use in a request
Route::middleware(['simple','throttle:4,1'])->group(function () {
    Route::get("/hello",[demoController::class,"hello"]);
    Route::get("/hi",[demoController::class,"hi"]);
});

////===========request manipulate============/////
Route::get('/name/{name}',[demoController::class,'addItem'])->middleware("addItem");
Route::get('/greet/{greet}',[demoController::class,"response"])->middleware("response");

