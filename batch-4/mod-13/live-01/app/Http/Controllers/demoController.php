<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    function hello(Request $request): array|string|null{
       return $request->header();
    }

    public function download(){
        // return response()->download('image.jpg'); //download
        return response()->file('image.jpg'); //BLOB response
    }

    //query string
    public function queryString(Request $request){
        return $request->query();
    }
}
