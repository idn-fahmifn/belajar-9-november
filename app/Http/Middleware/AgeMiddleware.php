<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Symfony\Component\HttpFoundation\Response;

class AgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $umur = 16;

        if ($umur >= 18) {
            // jika diizinkan
            return $next($request);
        }

        // handle saat umur dibawah 18
        return back()->with('messages', 'Umur kamu belum memenuhi');

    }
}
