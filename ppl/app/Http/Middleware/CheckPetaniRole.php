<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPetaniRole
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('user_role') === 'petani') {
            return $next($request);
        }
        
        return redirect('/');        
    }
}

