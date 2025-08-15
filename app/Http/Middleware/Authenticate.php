<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    
    protected function redirectTo($request)
{
    // Evita que Laravel intente redirigir a 'login' en APIs
    return $request->expectsJson() ? null : route('login');
}
}
