<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DemoController::class,'home'])->name('home.show');
Route::get('/profile',[DemoController::class,'profile'])->name('profile.show');
