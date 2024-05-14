<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class testController extends Controller
{
    /*
    public function __construct(){
        // $this->middleware('test')->except('index');
        // $this->middleware('test')->only('index');

    }
    */

    public function index(){
        return "this is form index";
    }

    public function store(){
        return "this is from store";
    }

    public  function hello(){
        echo "Greetings";
    }
}
