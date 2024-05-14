<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookiesController extends Controller
{
    public function CreateCookies(){
        $name = "cookies";
        $value = "123abc";
        $minute = 120;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = true;
        $httpOnly = true;

        return response('hello')->cookie($name, $value, $minute, $path, $domain, $secure, $httpOnly);
    }
}
