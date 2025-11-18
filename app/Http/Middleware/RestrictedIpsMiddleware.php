<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RestrictedIpsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
          // Define Restricted IP addresses
        $restrictedIps = [
            '123.456.789.000',
            '111.222.333.444',
            '127.0.0.1'
        ];

        if (in_array($request->ip(), $restrictedIps)) {
            // Return 403 Forbidden response
            abort(403, 'Access denied – Your IP address is blocked.');
        }
        return $next($request);
    }
}
