<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReqWithParams;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\ReqWithJsonController;
use App\Http\Controllers\ExtractAllReqController;
use App\Http\Controllers\RequestHeaderController;
use App\Http\Controllers\ResponseHeaderController;
use App\Http\Controllers\IpAndContentNegoController;
use App\Http\Controllers\CreateCustomizeJsonController;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use App\Http\Controllers\FileBinaryAndDownloadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//
Route::get('/home',[DemoController::class,'returnData']);

//req with params
Route::get('/params/{name}/{age}/{aim}',[ReqWithParams::class,'params']);

//request header
Route::get('/header',[RequestHeaderController::class,'ReqHeader']);

//JSON body
Route::get('/json',[ReqWithJsonController::class,'ReqWithJson']);

//Extract all data request
Route::get('/extract/{name}/{age}',[ExtractAllReqController::class,'extract']);

//form data
Route::post('/file', [FileController::class, "file"]);

//ip and content negotiation
Route::get("/ip",[IpAndContentNegoController::class,"ip"]);

//create customize json
Route::get("/create-json",[CreateCustomizeJsonController::class,"create_json"]);

//file binary and download
Route::get("fileBin",[FileBinaryAndDownloadController::class,"FileBinary"]);
Route::get("fileDownload",[FileBinaryAndDownloadController::class,"FileDownload"]);

//create-cookies
Route::get("cookies",[CookiesController::class,"CreateCookies"]);

//response-header
Route::get("res-header",[ResponseHeaderController::class,"res_header"]);