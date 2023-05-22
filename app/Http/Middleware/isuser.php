<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isuser
{

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role !== 0) {
            return redirect()->route('login.regester');
        }

        return $next($request);
    }
}
