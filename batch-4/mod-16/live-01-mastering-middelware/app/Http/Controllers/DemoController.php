<?php

namespace App\Http\Controllers;

use App\Http\Middleware\DemoMiddleware;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function  index(){
        $person = [
            'name' => 'John Doe',
            'age' => 30,
            'city' => 'New York'
            ];

        return response($person);
    }
    public function  index1(){
        $person = [
            'name' => 'John Doe',
            'age' => 30,
            'city' => 'New York'
            ];

        return response($person);
    }
    public function  index2(){
        $person = [
            'name' => 'John Doe',
            'age' => 30,
            'city' => 'New York'
            ];

        return response($person);
    }
    public function  index3(){
        $person = [
            'name' => 'John Doe',
            'age' => 30,
            'city' => 'New York'
            ];

        return response($person);
    }

}
