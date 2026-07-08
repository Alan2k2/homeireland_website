<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventDirectAccess
{
    public function handle(Request $request, Closure $next)
    {
        // Block direct GET requests
        if ($request->isMethod('get')) {
            return redirect('/login')->with('error', 'Unauthorized access!');
        }

        return $next($request);
    }
}
