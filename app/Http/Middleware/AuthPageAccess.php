<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthPageAccess
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return redirect()->route('404');       
        }
        return $next($request);
    }
}
