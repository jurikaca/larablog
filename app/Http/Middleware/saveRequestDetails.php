<?php

namespace App\Http\Middleware;

use Closure;
use App\RequestClient;

class saveRequestDetails
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
        $request_client = new RequestClient();
        $request_client->user_agent = $request->header('User-Agent');
        $request_client->IP_Address = $request->ip();
        $request_client->save();
        return $next($request);
    }
}