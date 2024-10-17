<?php

use App\Http\Middleware\adultCheckMiddleware;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except:[
            '*',
        ]);

        //middleware alias

        $middleware->alias([
            'auth' => DemoMiddleware::class,
            'adult' => adultCheckMiddleware::class,
        ]);




        //global middleware
        // $middleware->append([DemoMiddleware::class]);


        //middleware group with appendToGroup and prependToGroup method
        /*
        $middleware->appendToGroup('myMidGrp',[
            DemoMiddleware::class,
            adultCheckMiddleware::class
        ]);
        */
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
