<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LimitController extends Controller
{
    //throttle for specific route
    function limit1(){
        return "Hello. We have to protect doss attract";
    }

    //throttle for whole application
    function limit2(){
        return "Doss attract protection for whole application";
    }
}
