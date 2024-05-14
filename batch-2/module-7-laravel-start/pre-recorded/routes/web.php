<?php

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
<<<<<<< HEAD

Route::get('/hello',function(){
    return"
        <!DOCTYPE html>
        <html>
            <head>
                <title> welcome to laravel </title>
            </head>
            <body>
                <h1>Hello Laravel</h2>
            </body>
            <p> Hello HTML pages </p>
            <img src='https://imgd.aeplcdn.com/370x208/n/cw/ec/130591/fronx-exterior-right-front-three-quarter-109.jpeg?isig=0&q=80'
                alt='larave picture'>
        </html>
    ";
});
=======
>>>>>>> 555938d696d631bb86c49387e8d374b2b213313d
