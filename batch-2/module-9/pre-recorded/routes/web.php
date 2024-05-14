<?php

use App\Http\Controllers\ConstructorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LimitController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\MiddlewareController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\PracticeMIddleware;
use Illuminate\Support\Facades\Route;

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

//laravel log for application health history checking
Route::get("/log/{num1}/{num2}",[LogController::class,"log"]);

//Laravel session management
//session Put
Route::get("/sessionPut/{email}",[SessionController::class,"sessionPut"]);
//session Pull
Route::get("/sessionPull",[SessionController::class,"sessionPull"]);
//session Get
Route::get("/sessionGet",[SessionController::class,"sessionGet"]);
//session Forget
Route::get("/sessionForget",[SessionController::class,"sessionForget"]);
//session Flush
Route::get("/sessionFlush",[SessionController::class,"sessionFlush"]);

////=======practice middleware======////
Route::get("/middleware",[MiddlewareController::class,"Check"])->middleware([PracticeMIddleware::class]);

///middleware redirect() method
Route::get("check1/{id?}",[MiddlewareController::class,"check1"]);
Route::get("check2",[MiddlewareController::class,"check2"]);

////=======practice controller=======//////

//rate limiting or throttling
Route::get("/limit1",[LimitController::class,"limit1"])->middleware("throttle:4,1");
Route::get("/limit2",[LimitController::class,"limit2"]);

//resource controller
Route::resource('user', ResourceController::class);

//Constructor controller
// Route::get('/constructor',[ConstructorController::class,]);

////======practice blade template==========////
Route::get("/home",[HomeController::class,"home"]);