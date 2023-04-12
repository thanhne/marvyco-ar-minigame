<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckExcutionTime
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
        $startTime = microtime(true);

        $response = $next($request);

        $executionTime = microtime(true) - $startTime;

        if ($executionTime > 0.2) {
            return response()->json(['error' => 'API execution time too long.'], 500);
        }

        return $response;
    }
}
