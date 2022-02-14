<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if(auth()->user()->is_admin == 1)
            return $next($request);

        if(auth()->user())
            auth()->logout();

        return redirect('/admin/login')->withErrors("شما اجازه دسترسی به این بخش را ندارید");
    }
}
