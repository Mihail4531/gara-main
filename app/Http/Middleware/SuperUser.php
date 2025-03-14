<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SuperUser
{
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = Auth::user()->role;

        if($userRole == 2) {
            return $next($request);
        } elseif ($userRole == 1) {
            return redirect()->route('dashboard');
        }
        return redirect()->route('dashboard');
    }

}
