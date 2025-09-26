<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if (session()->has('app_locale')) {
            // dd('en');
            if (session('app_locale')=='en') { session(['direction' => 'ltr']);  app()->setLocale('en');  App::setLocale(session('en')); }
            if (session('app_locale')=='fa') { session(['direction' => 'rtl']);  app()->setLocale('fa');  App::setLocale(session('fa')); }


        }else{
            // dd('fa');
            session(['direction' => 'rtl']);  app()->setLocale('fa');  App::setLocale(session('fa'));
        }

        return $next($request);
    }
}
