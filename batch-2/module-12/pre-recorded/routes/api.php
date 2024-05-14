<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\brandController;
use App\Http\Controllers\productController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//create
Route::post('/create',[brandController::class,'create_data']);
Route::post('/createProduct',[productController::class,'productCreate']);
//update
Route::post('/brand/update/{id}',[brandController::class,'updateBrand']);
//upsert = update + insert
Route::post('upsert/{brandName}',[brandController::class,'upsert_brand']);
//delete
Route::post('brand/delete/{id}',[brandController::class,'delete']);
//increment and decrement
Route::get('increAndDec',[productController::class,'increAndDec']);

//read
Route::get('/read',[productController::class,'read']);
