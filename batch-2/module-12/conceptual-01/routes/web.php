<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class,'index']);
Route::get('/profile',[ProfileController::class,'profile']);
Route::get('/comment',[CommentController::class,'comment']);
