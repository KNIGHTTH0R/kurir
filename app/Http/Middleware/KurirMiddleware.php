<?php

namespace App\Http\Middleware;

use Closure;
use PluginCommonKurir\Libraries\Codes;
use PluginHttpClient\TokenSession;

class KurirMiddleware
{
    const USER_TYPE = 'kurir';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(TokenSession::getInstance()->getUserType() !== self::USER_TYPE){
            return response()->json([
                'code' => Codes::UNAUTHORIZED_ACCESS,
                'message' => trans('unathorized access')
            ])->setStatusCode(401);
        }

        return $next($request);
    }
}