<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, string $role)
    {
        if (!Auth::check() || auth()->user()->role !== $role) {
            return redirect('/')->with('error', 'Accès refusé');
        }

        return $next($request);
    }
}