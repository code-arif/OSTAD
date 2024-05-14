<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReqWithJsonController extends Controller
{
      public function ReqWithJson(Request $request){
            //catch all data
            // return $request->input();

            //catch specific variable data
            $name = $request->input("name");
            $age = $request->input("age");

            return "my name is ". $name ." I am ". $age ." years old";
      }
}
