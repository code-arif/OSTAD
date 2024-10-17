<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogController extends Controller
{
    public function logManagement(Request $request){
        Log::info('This is an info log');
        Log::warning('This is a warning log');
        Log::error('This is an error log');
        Log::critical('This is a critical log');

        return response()->json('Log has been created');
    }
}
