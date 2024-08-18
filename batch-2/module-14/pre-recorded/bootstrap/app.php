<?php

use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->validateCsrfTokens(except:[
           'http://localhost:8000/userRegistraion',
           'http://localhost:8000/userLogin',
           'http://localhost:8000/send-otp',
        //    'http://localhost:8000/otp-verify',
           'http://localhost:8000/reset-pass'
        ]);

        $middleware->alias([
            TokenVerificationMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
