<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function samplePostReq(){
        return "POST REQUEST";
    }

    public function sampleGetReq(){
        return "GET REQUEST";
    }
}
