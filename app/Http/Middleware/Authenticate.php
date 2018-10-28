<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Session;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->guest()){
            if($request->ajax() || $request->wantsJson()){
                return response('Unauthorized', 401);
            }else{
                Session::put('oldUrl', $request->url());
                return route('user.signin');    
            }
        }
        return $next($request);
    }
    
     protected function redirectTo($request)
    {
        return route('user.signin');
    }
}
