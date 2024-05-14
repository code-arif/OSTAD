<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function hello(){
        return "I love you";
    }

    //pass params into route
    function params($name = "world"){
        return "Hello $name";
    }

}


