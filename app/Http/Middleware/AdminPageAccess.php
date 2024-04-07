<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminPageAccess
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            foreach (Auth::user()->roles as $item) {
                if($item['rol_name'] !== 'Customer'){
                    return $next($request);
                }
            }
            abort(404);
        }else{
            abort(404);
        }   
    }
}
