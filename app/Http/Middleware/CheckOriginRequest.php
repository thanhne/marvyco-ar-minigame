<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckOriginRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $allowedOrigins = ['http://localhost:8009', 'http://127.0.0.1:8009'];
        $origin = $request->header('Origin');

        /**
         * For debugger
         */
        if($origin == null) {
            $response = $next($request);
            return $response;
        }

        if (in_array($origin, $allowedOrigins)) {
            return $next($request);
        }

        return response()->json(['error' => 'Invalid origin.'], 403);
    }
}
