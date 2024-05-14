<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function weather($location){
        $weatherDetails = Http::get("https://wttr.in/{$location}?format=j1")->json();
        $currentTemp = $weatherDetails["current_condition"][0]["temp_C"];
        $currentCondition = $weatherDetails["current_condition"][0]["weatherDesc"][0]["value"];

        return view("weather",compact("currentTemp","currentCondition","location"));
    
    }
}
