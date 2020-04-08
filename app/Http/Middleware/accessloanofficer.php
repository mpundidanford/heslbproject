<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Auth;

class accessloanofficer
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
        if(Auth::user()->HasAnyRole('uloanofficer')){
            return $next($request);
        }
        redirect('home');
      
    }
}
