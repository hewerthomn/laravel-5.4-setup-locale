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

    	  // if(session()->has('lang')) {
    		//     app()->setLocale(session()->get('lang'));
    		//     $phplocale = session()->get('locale');
    	  // }

    	  setlocale(LC_TIME, $phplocale);

        return $next($request);
    }
}
