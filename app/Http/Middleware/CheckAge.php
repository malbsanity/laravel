<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        // Assuming age is passed in the request
        $age = $request->input('age');

        if ($age < 18) {
            // Redirect to access denied page if age is less than 18
            return redirect()->route('access-denied'); // Define this route in your routes/web.php
        } else {
            // Redirect to welcome page if age is 18 or above
            return redirect()->route('welcome'); // Define this route in your routes/web.php
        }

        return $next($request);
    }
}
