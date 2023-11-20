<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //$user = Auth::user();
        //if (user->hasRole('Admin'))
        //{
            //abort(403, 'Unauthorized');
        //}
        if (!auth()->user()->is_admin){
           abort(403, 'Unauthorized Access');

        }

        return $next($request);
    }
}
