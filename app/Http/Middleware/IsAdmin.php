<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Session;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::get('user_role') != 1) {
            return redirect('/blocked');
        }

        return $next($request);
    }
}
