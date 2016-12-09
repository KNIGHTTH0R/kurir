<?php

namespace App\Http\Middleware;

use Closure;
use PluginHttpClient\TokenSession;

class LoggedMiddleware
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
        if(!TokenSession::getInstance()->isLogin()){
            return redirect()->route('login');
        }

        return $next($request);
    }
}