<?php

namespace App\Http\Middleware;



use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $variableName): Response
    {
        //not auth()->check() is not logged in redirect other page && !request()->is('login')
        if (!auth()->check() ) {
            return redirect()->route('logout');
        }
        //check permission
       if (!auth()->user()->hasPermission($variableName)) {
            return redirect()->route('logout');
        }
        if (auth()->user()->status == 1) {
            return $next($request);
        }
        return redirect()->route('logout');
        
    }
}
