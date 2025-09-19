<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        api: __DIR__.'/../routes/api.php', 
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',

        then: function () {
            Route::prefix('admin')
            ->middleware(['web' , 'adminauth'])
            ->namespace('Admin')
            ->name('admin.')
            ->group(base_path('routes/web/admin.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('admin', [

            \Illuminate\Cookie\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,

        ]);

        $middleware->alias([

        'adminauth' => \App\Http\Middleware\AdminAuthenticated::class,
        'userauth' => \App\Http\Middleware\UserAuthenticated::class,

        ]);


    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
