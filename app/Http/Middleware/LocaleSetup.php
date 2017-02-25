<?php

namespace App\Http\Middleware;

use Closure;

class LocaleSetup
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
        $phplocale = config('app.phplocale');

    	  // if(Session::has('lang')) {
    		//     App::setLocale(Session::get('lang'));
    		//     $phplocale = Session::get('locale');
    	  // }

    	  setlocale(LC_TIME, $phplocale);

        return $next($request);
    }
}
