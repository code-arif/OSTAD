<?php

namespace App\Http\Controllers;

use Illuminate\Container\RewindableGenerator;
use Illuminate\Http\Request;

class demoController extends Controller
{
    function hello(){
        return ("hello, I am here");
    }

    function hi(){
        return (
            "my name is ariful"
        );
    }

    //request manipulate by middleware
    function addItem(Request $request, $name){
        print_r($request->all());
    }

    //response manipulate by middleware
    function response(Request $request, $greet){
        return $request;
    }
} 
