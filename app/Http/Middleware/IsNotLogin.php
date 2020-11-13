<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Session;

use Closure;

class IsNotLogin
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
        if (Session::get('user_id')) {
            if (Session::get('user_role') == 1) {
                return redirect('/dashboard');
            } else if (Session::get('user_role') == 2) {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
