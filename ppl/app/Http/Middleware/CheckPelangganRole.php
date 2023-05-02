<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPelangganRole
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('user_role') === 'pelanggan') {
            return $next($request);
        }
        
        return redirect('/');        
    }
}

