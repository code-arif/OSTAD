<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
Route::view('/','customers');

//customer route
Route::get('/customers',[CustomerController::class,'index'])->name('customer.index');
Route::get('/customers/{customer}',[CustomerController::class,'show'])->name('customers.show');
