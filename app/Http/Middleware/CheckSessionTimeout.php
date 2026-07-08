<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckSessionTimeout
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            // User is authenticated
            if (time() - strtotime(session('last_activity')) > config('session.lifetime') * 60) {
                // Session has expired
                Auth::logout(); // Log out the user
                return redirect()->route('login')->with('error', 'Your session has expired. Please log in again.');
            } else {
                // Update last activity time
                session(['last_activity' => now()]);
            }
        }

        return $next($request);
    }
}
