<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtractAllReqController extends Controller
{
    public function extract(Request $request){
        //params
        $name = $request->name;
        $age = $request->age;

        //header
        $aim = $request->header("aim");

        //body
        $height = $request->input("height");

        return [
            "name"=> $name,
            "age"=> $age,
            "web development"=> $aim,
            "4.4'"=> $height
        ];
    }
}
