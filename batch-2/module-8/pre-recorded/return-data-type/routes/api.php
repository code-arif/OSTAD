<?php

use Illuminate\Http\Request;
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
use App\Http\Controllers\FileBinaryAndDownloadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/home",[DemoController::class,"returnData"]);

//params
Route::get('/params/{name}/{age}/{aim}',[ReqWithParams::class,'params']);

//JSON body
Route::get('/json',[ReqWithJsonController::class,'ReqWithJson']);

//request header
Route::get('/header',[RequestHeaderController::class,'ReqHeader']);

//Extract all data request
Route::get('/extract/{name}/{age}',[ExtractAllReqController::class,'extract']);

//multi-part form data
Route::post('/file',[FileController::class,"file"]);

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