<?php

use App\Http\Controllers\postController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-profile',[userController::class,'user_profile']);
Route::get('/user-post',[userController::class,'user_post']);
Route::get('/profile',[profileController::class,'profile']);
Route::get('/post',[postController::class,'postRead']);
Route::get('/post_tag',[postController::class,'post_tag']);
Route::get('/tag',[TagController::class,'tags']);
