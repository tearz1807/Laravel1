<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResponseDelay
{
    public function handle(Request $request, Closure $next)
    {
        $delayMs = 1000;

        sleep($delayMs / 1000);

        return $next($request);
    }
}
