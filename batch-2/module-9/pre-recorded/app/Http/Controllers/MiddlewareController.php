<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{

    //simple check0
    function Check():string{
        return "Hello middleware";
    }

    //middleware redirect() method user of request url
    function check1():string{
        return "Hello middleware 01";
    }

    function check2():string{
        return "Hello middleware 02. You are unauthorized";
    }
}
