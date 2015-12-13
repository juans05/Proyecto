<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,

        /** Roles  */

        'Alumno' => \App\Http\Middleware\Alumno::class,
        'Profesor' => \App\Http\Middleware\Profesor::class,
        'Tutor' => \App\Http\Middleware\Tutor::class,
        'Administrador' => \App\Http\Middleware\Administrador::class,
        'SuperAdministrador' => \App\Http\Middleware\SuperAdministrador::class,
        'Asesor' => \App\Http\Middleware\Asesor::class,
        'Secretaria' => \App\Http\Middleware\Secretaria::class,
        'PadreFamilia' => \App\Http\Middleware\PadreFamilia::class,
        /**FIn  Roles  */
    ];
}
