<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Employer
{

    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if ($user->employer == null) {
            return redirect()->route('employer.create')->with('error', 'Please create employer account first!');
        }
        return $next($request);
    }
}
