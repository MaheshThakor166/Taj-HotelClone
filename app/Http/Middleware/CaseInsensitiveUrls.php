<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CaseInsensitiveUrls
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();

        // Check if the path contains any uppercase characters
        if ($path !== strtolower($path)) {
            // Redirect to the lowercase version of the URL
            return redirect(strtolower($path), 301);
        }

        return $next($request);
    }
}

