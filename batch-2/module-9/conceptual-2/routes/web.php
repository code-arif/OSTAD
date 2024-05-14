<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

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

Route::group([ 'prefix' => 'admin'], function(){
    Route::get('/home',[dashboardController::class,'dashboard'])->name("admin.home");
    Route::get('/tasks',[dashboardController::class,'showsTask'])->name("tasks.show");
});
