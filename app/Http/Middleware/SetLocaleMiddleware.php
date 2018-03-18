<?php

namespace App\Http\Middleware;

use Closure;

class SetLocaleMiddleware
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
        if(\Auth::check()){
            if(\Auth::user()->settings->language == ''){
                \App::setLocale('de');
            }else{
                \App::setLocale(\Auth::user()->settings->language);
            }
        }else{
            \App::setLocale('de');
        }

        //dd(\App::getLocale());
        return $next($request);
    }
}
