<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'home'])->name('home.show');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/resume',[HomeController::class,'resume'])->name('resume');
Route::get('/services',[HomeController::class,'service'])->name('service');
Route::get('/portfolio',[HomeController::class,'portfolio'])->name('portfolio');
Route::get('/portfolio-details',[HomeController::class,'portfolioDetails'])->name('portfolio.details');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
