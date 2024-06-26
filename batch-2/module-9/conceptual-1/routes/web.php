<?php

use App\Http\Controllers\testController;
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

Route::get('/index',[testController::class,"index"])->middleware('test');
Route::get('/store',[testController::class,"store"]);
Route::get('/hello',[testController::class,"hello"]);
Route::redirect('hello','store');
