<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        // Retrieve the authenticated user
        $user = $request->user();

        // Check if the user is authenticated
        if (!$user) {
            // Redirect or respond with an unauthorized message if not authenticated
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Check if the user has any of the required roles
        if (!$user->hasAnyRole($roles)) {
            // Abort the request with a 403 status code
            abort(403, 'Unauthorized');
        }

        // Continue with the request if the user has the required role
        return $next($request);
    }
}
