<?php

namespace App\Http\Middleware;

use Closure;

class CheckApproval
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
        $user = auth()->user();
        $user_role = $user->approved; 
        if ( !$user_role == 1 ) {
            return redirect('/pending');
        }

        return $next($request);
    }
}
