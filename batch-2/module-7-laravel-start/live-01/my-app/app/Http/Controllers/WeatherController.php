<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function displayLocationDetails(){
        $location = [
            "name"=> "Dhaka",
            "Country"=> "Bangladesh",
            "population"=> "18000000",
            "timezone"=> "GMT+6",
            "profile"=> "Md. Ariful Islam",
        ];

        return $location;
    }
}
