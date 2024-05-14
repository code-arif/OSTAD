<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function index(){

        // $var = "I am data from controller";

        // return view("pages.home",['data' => $var]);

        //======pass associative array in blade template=======//
        $info = [
            ['name' => "Ariful", 'city' => 'Srajgonj', 'country' => 'Bangladesh'],
            ['name' => "Shoriful", 'city' => 'Ullapara', 'country' => 'Bangladesh'],
            ['name' => "Ahsan", 'city' => 'Tokio', 'country' => 'Japan'],
            ['name' => "Devid", 'city' => 'Washington', 'country' => 'USA'],
            ['name' => "Jon doe", 'city' => 'London', 'country' => 'UK'],
        ];

        return view('pages.home',['info' => $info]);
    }
}
