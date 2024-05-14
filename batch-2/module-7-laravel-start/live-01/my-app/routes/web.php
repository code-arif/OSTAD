<?php

use App\Http\Controllers\PracticeController;
use App\Http\Controllers\UserController;
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

Route::get('/home',[UserController::class,"hello"] );
Route::get("about/{name?}",[UserController::class,"params"]);


Route::get("/req",[PracticeController::class,"sampleGetReq"]);
Route::post("/req",[PracticeController::class,"samplePostReq"]);