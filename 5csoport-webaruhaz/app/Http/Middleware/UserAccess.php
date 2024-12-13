<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $userType
     * @return mixed
     */

    /** @var \App\Models\User|null $user */
    

    public function handle(Request $request, Closure $next, string $userType)
    {
        if (Auth::user()->role == $userType) {
            return $next($request);
        }
 
        return response()->json(['You do not have permission to access for this page.'], 403);
        /* return response()->view('errors.check-permission'); */
    }
}
