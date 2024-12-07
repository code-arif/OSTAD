<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//my routes
Route::view('/demo','alpine.demo',['title' => 'Alpine.js']);
Route::view('/demo2','alpine.demo2',['title' => 'Alpine.js practice']);
Route::view('/demo3','alpine.demo3',['title' => 'Alpine.js practice']);
Route::view('/demo4','alpine.demo4',['title' => 'Alpine.js practice']);

//product management
Route::get('/product',[ProductController::class, 'index'])->name('product.index');
Route::get('/product-table',[ProductController::class, 'index2'])->name('product.index2');
Route::post('/product/create',[ProductController::class, 'create']);
Route::delete('/product/delete/{id}',[ProductController::class, 'delete']);
Route::put('/product/edit/{id}',[ProductController::class, 'update']);
