<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $userRole = Auth::user()->role ?? 'user';

        // Super admin can access all routes
        if ($userRole === 'super_admin') {
            return $next($request);
        }

        // Admin can access admin routes
        if ($userRole === 'admin' && $role === 'admin') {
            return $next($request);
        }

        // Regular users can access user routes
        if ($userRole === 'user' && $role === 'user') {
            return $next($request);
        }

        // Unauthorized access - redirect to home
        return redirect('/')->with('error', 'You do not have permission to access this page.');
    }
}
