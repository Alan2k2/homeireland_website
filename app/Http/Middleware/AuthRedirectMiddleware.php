<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthRedirectMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Redirect to login if the user is not authenticated
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Please login to access this page.');
        }

        return $next($request);
    }
}
