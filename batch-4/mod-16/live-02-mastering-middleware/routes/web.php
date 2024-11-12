<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\FlashController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PracticeContoller;
use App\Http\Controllers\pullAndGetController;
use App\Http\Controllers\reFlashController;
use App\Http\Controllers\RequestPutSession;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//session
Route::get('/set-session',[DemoController::class,'setSession']);
Route::get('/get-session',[DemoController::class,'getSession']);
Route::get('/read-again',[DemoController::class,'readAgain']);
Route::get('/about',[DemoController::class,'about']);
Route::get('/update-session',[DemoController::class,'updateSession']);
Route::get('/delete-session',[DemoController::class,'deleteSession']);


//multple sesssion data in put method
Route::get('/multiple-session-put',[PracticeContoller::class,'setPutSession']);
Route::get('/multiple-session-get',[PracticeContoller::class,'getGetSession']);

//$request variable and session
Route::get('/request-variable',[RequestPutSession::class,'requestVariable']);
Route::get('/request-variable-get',[RequestPutSession::class,'retrieveData']);

//session method
Route::get('/session-method',[SessionController::class,'store']);
Route::get('/session-method-get',[SessionController::class,'show']);


//session generate with facade
Route::get('/set-session-facade',[DemoController::class,'sessionGenerateWithFacade']);
Route::get('/get-session-facade',[DemoController::class,'getSessionWithFacade']);
Route::get('/delete-session-facade',[DemoController::class,'deleteAllSessionWithFacade']);


//defference between pull and get
Route::get('/set-data',[pullAndGetController::class,'setData']);
Route::get('/get-data',[pullAndGetController::class,'getData']);
Route::get('/pull-data',[pullAndGetController::class,'pullData']);


//flash message or temporary session
Route::get('/set-flash-message',[FlashController::class,'setFlashMessage']);
Route::get('/get-flash-message',[FlashController::class,'getFlashMessage']);
Route::get('/read-flash-message',[FlashController::class,'readFlash'])->name('flash');
Route::get('/flash-redirect',[FlashController::class,'setFlashAndRedirect']);


//re flash
Route::get('/set-re-flash',[reFlashController::class,'setReFlash']);
Route::get('/get-re-flash',[reFlashController::class,'showReFlash'])->name('show.flash');
Route::get('/check-re-flash',[reFlashController::class,'checkReFlash']);




//log management
Route::get('/set-log',[LogController::class,'logManagement']);


//dos-attract protect
Route::get('/dos-protect',[DemoController::class,'protect'])->middleware('throttle: 5, 1');

