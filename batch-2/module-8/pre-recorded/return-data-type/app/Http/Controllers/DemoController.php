<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //declare return data type
    function returnData():string {
    //return string
    return "hello, I'm form return data type";
    }
}
