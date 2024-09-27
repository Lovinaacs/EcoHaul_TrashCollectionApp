<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {  // Check if the user is not logged in
            return redirect('login')->with('error', 'You need to log in first.');
        }

        return $next($request);
    }
}
