<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCheck
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // Se o usuário não estiver autenticado, redirecione para a página de login
            return redirect()->route('login');
        }

        return $next($request);
    }
}
