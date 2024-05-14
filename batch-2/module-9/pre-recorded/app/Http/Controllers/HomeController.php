<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
       $data = [
            ['name' =>'Ariful','city'=> 'Sirajgonj'],
            ['name' =>'Ahsan','city'=> 'Ullapara'],
            ['name' =>'Shorif','city'=> 'Dhaka'],
            ['name' =>'Abdul','city'=> 'Rajshahi'],
       ];
        return view("home", ['users' => $data]);
    }
}
