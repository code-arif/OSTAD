<?php

use Illuminate\Support\Facades\Route;

Route::view('/registrtion','pages.auth.registration');
Route::view('/login','pages.auth.login');
Route::view('/profile','pages.dashboard.profile');
Route::view('/','home');
