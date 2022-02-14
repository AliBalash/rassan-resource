<?php

namespace App\Http\Middleware;

use Spatie\Permission\Models\Permission;
use Closure;
use Illuminate\Http\Request;

class CheckAdminPermission
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $parameter
     * @return mixed
     */
    public function handle(Request $request, Closure $next , ...$parameter)
    {
        
        if(is_array($parameter)){

            if(!auth()->user()->hasAnyPermission($parameter)){
                return  abort(403);
            }

        }else{
            if(! auth()->user()->hasPermissionTo($parameter)){
                return  abort(403);
            }

        }


        return $next($request);
    }
}
