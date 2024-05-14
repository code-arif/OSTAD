<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{

    //http code and route optional params
    function Greet(Request $request, $name=Null){
        return response("Hello {$name}",200);
    }

    //route params with url control
    function GreetById(Request $request, $id = Null){
        if($id == Null){
            return response("Please give your id",400);
        }else{
            return response("This is your {$id}",200);
        }
    }
}
