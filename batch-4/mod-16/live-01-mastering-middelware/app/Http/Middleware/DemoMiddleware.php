<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Log;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $code = $request->header('code');
        $ip = $request->ip();


        //log
        Log::info($ip);

        if($code == 'abc123'){
            return $next($request);
        }
        else{
            return  response()->json(['error' => 'Invalid code'], 401);
        }
    }
}
