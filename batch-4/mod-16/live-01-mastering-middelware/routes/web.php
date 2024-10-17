<?php

use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello',[DemoController::class,'index'])->middleware([DemoMiddleware::Class]);
// Route::get('/hello',[DemoController::class,'index'])->middleware('auth');
// Route::get('/hello',[DemoController::class,'index'])->withoutMiddleware('auth');

//add middleware group in append mode
// Route::get('/hello',[DemoController::class,'index'])->middleware('myMidGrp');

//add middleware  group in prepend mode
//approach-01
/*
Route::middleware(['myMidGrp'])->group(function(){
    Route::get('/hello',[DemoController::class,'index']);
});
*/

//approach-02
/*
Route::group(['middleware' => 'myMidGrp'], function(){
    Route::get('/hello',[DemoController::class,'index']);
});
*/

//multiple middleware
Route::middleware(['auth','adult'])->group(function(){
    Route::get('hello',[DemoController::class,'index']);
});

/*
Route::group(['middleware' => 'auth'], function () {
    Route::get('/hello', [DemoController::class, 'index']);
    // Route::get('/hello1', [DemoController::class, 'index1'])->withoutMiddleware([DemoMiddleware::class]);
    Route::get('/hello1', [DemoController::class, 'index1'])->withoutMiddleware('auth');
    Route::get('/hello2', [DemoController::class, 'index2']);
    Route::get('/hello3', [DemoController::class, 'index3']);
});
*/


// Route::get('/r1',[DemoController::class,'r1']);
// Route::get('/r2',[DemoController::class,'r3']);
// Route::get('/r3',[DemoController::class,'r3']);
// Route::get('/r4',[DemoController::class,'r4']);
