<?php

use App\Http\Controllers\GreetController;
use App\Http\Controllers\userInputController;
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

Route::get('greet/{name?}',[GreetController::class,'Greet'])->whereAlpha('name');
Route::get('greetId/{id?}',[GreetController::class,"GreetById"])->whereNumber("id");


//simple form view and submission
Route::get("/user",[userInputController::class,"userInput"]);
Route::post("/user",[userInputController::class,"getUserInput"])->name('user.submit');