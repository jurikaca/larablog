<?php

namespace App\Http\Middleware;

use Closure;
use App\UserView as UserViewModel;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserView
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
        $user = User::whereUsername(substr(strrchr($request->getRequestUri(), '/'), 1))->first();
        if(!Auth::check() || (Auth::check() && $user->id !== auth()->user()->id)){
            $user_view = new UserViewModel();
            if(Auth::check()){
                $user_view->viewer_id = auth()->user()->id;
            }
            $user_view->user_id = $user->id;
            $user_view->user_agent = $request->header('User-Agent');
            $user_view->IP_Address = $request->ip();
            $user_view->save();
        }
        return $next($request);
    }
}
