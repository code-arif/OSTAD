<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReqWithParams extends Controller
{
    public function params(Request $request){
        $name = $request-> name;
        $age = $request-> age;
        $aim = $request-> aim;

        return "I'm ". $name." Islam. I'm ". $age ."years old. I want to be a professional ". $aim ."";
    }
}
