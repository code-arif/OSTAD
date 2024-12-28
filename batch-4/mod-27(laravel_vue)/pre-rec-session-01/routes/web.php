<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/page1',[SiteController::class,'page1'])->name('page1');
Route::get('/page2',[SiteController::class,'page2'])->name('page2');
Route::get('/page3',[SiteController::class,'page3'])->name('page3');
Route::get('/page4',[SiteController::class,'page4'])->name('page4');
Route::get('/page5',[SiteController::class,'page5'])->name('page5');
