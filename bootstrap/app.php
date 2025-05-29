<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function () {
        //
    })
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => \App\Http\Middleware\RoleMiddleware::class.':admin',
            'staff_pengelola_kamar' => \App\Http\Middleware\RoleMiddleware::class.':staff_pengelola_kamar',
            'staff_pengelola_restoran' => \App\Http\Middleware\RoleMiddleware::class.':staff_pengelola_restoran',
            'user' => \App\Http\Middleware\RoleMiddleware::class.':user',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
