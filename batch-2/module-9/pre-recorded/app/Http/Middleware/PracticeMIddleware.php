<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PracticeMIddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        //simple authorization check
        /*
        $key = $request->header("API-KEY");
        if($key == "Amim") {
            return $next($request);
        }else{
            return response()->json('Unauthorized', 401);
        }
        */

        //redirect() method use for request url params
        /*
        $id = $request->id;
        if ($id == "123") {
            return $next($request);
        }else{
            return redirect("/check2");
        }
        */

        $id = $request->id;
        if ($id == "123") {
        return $next($request);
        }else{
        return response()->json("You are unauthorized",401);
        }

    }
}
