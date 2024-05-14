<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageController extends Controller
{
    public function image(){
        return view('pages.image-upload');
    }
}
