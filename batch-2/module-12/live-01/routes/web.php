<?php

use App\Http\Controllers\bookAuthorController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('data',[InvoiceController::class,'getData']);
Route::get('/invoice/{id}',[InvoiceController::class,'invoice']);
Route::get('/bookAuthor',[bookAuthorController::class,'bookAuthor']);
//create with heardcode
Route::get('/create/book',[bookAuthorController::class,'createBook'])->name('book.create');
