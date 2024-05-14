<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestHeaderController extends Controller
{
    public function ReqHeader(Request $request):string{
        //catch all data
        // return $request->header();

        //catch specific data
        $name = $request->header('name');
        $age = $request->header('age');

        return "my name is ". $name ." & I'm ". $age ."years old";
    }
}
