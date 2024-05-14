<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseHeaderController extends Controller
{
    public function res_header(){
        return response("Greetings")->header("name","Ariful");
}
}
