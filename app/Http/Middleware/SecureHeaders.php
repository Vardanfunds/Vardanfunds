<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecureHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        // HSTS (Strict-Transport-Security) 

        //$response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload'); 

        // X-Content-Type-Options 

        $response->headers->set('X-Content-Type-Options', 'nosniff');
        // X-Frame-Options 

        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        // X-XSS-Protection 
        $response->headers->set('X-XSS-Protection', '1; mode=block'); 
        // $csp = "default-src 'self'; " 
        // . "script-src 'self' https://apis.google.com 'unsafe-inline'; " 
        // . "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; " 
        // . "font-src 'self' https://fonts.gstatic.com; "
        // . "img-src 'self' data:;"; 
        // Content-Security-Policy (CSP)
        //$response->headers->set('Content-Security-Policy', "default-src 'self'; "); 

        return $response;
    }
}
