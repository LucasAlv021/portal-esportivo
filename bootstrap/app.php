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
    ->withMiddleware(function (Middleware $middleware) {
        // ESTA É A LINHA QUE VOCÊ PRECISA ADICIONAR.
        // Ela diz ao sistema para onde redirecionar usuários logados.
        $middleware->redirectTo(
            users: '/' // Redireciona para a página inicial após o login.
        );
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
