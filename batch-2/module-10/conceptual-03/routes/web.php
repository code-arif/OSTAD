<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\imageController;
use App\Http\Controllers\taskController;

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
})->name('welcome');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', [dashboardController::class, 'dashboard'])->name("admin.home");
    Route::get('/tasks', [taskController::class, 'showsTask'])->name("tasks.show");

    //single image upload
    Route::get('/single-image', [imageController::class, 'singleImage'])->name('show.single.image');
    Route::post('/single-image', [imageController::class, 'uploadSingleImage'])->name('upload.single.image');

    //multiple image upload
    Route::get('/multiple-image', [imageController::class, 'multipleImage'])->name('show.multiple.image');
    Route::post('/multiple-image', [imageController::class, 'uploadMultipleImage'])->name('upload.multiple.image');
});
