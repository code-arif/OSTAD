<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpAndContentNegoController extends Controller
{
    public function ip(Request $request){
        return $request->ip();
    }
}
