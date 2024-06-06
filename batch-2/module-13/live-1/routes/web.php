<?php

use App\Http\Controllers\customerController;
use Illuminate\Support\Facades\Route;




Route::view("/","pages.customer");


// Customer Routes
Route::get('/customers', [customerController::class, 'index'])->name('customers.index');
Route::get('/customers/{customer}', [customerController::class, 'show'])->name('customers.show');
Route::post('/customers', [customerController::class, 'store'])->name('customers.store');
Route::put('/customers/{customer}', [customerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer}', [customerController::class, 'destroy'])->name('customers.destroy');
