<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogController extends Controller
{
    function log(Request $request){
        $num1= $request->num1;
        $num2= $request->num2;

        $sum = $num1 + $num2;

        ////////------laravel log classification----------///////

        // Log::info($sum);
        // Log::emergency($sum);
        // Log::critical("$sum");
        // Log::alert($sum);
        // Log::error($sum);
        // Log::warning("$sum");
        // Log::notice($sum);
        Log::debug($sum);
        return $sum;
    }
}
