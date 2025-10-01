<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocaleAndDirection
{
    public function handle(Request $request, Closure $next)
    {

        // dd($request);
        // Set default locale and direction if not already set

        $locale = $request->route('local'); // 'local' from {local} prefix

        if (!in_array($locale, ['en', 'fa'])) {

        }


        if (!session()->has('app_locale')) {
            session(['app_locale' => 'en']);
        }

        if (!session()->has('direction')) {
            session()->put('direction', 'ltr');
        }


        if (!in_array($locale, ['en', 'fa'])) {
        if($locale=='en'){
        session(['app_locale' => 'en']);
        session()->put('direction', 'ltr');
        }
        }else{
        if($locale=='fa'){
        session(['app_locale' => 'fa']);
        session()->put('direction', 'rtl');
        }
        if($locale=='en'){
        session(['app_locale' => 'en']);
        session()->put('direction', 'ltr');
        }
        }


        app()->setLocale(session('app_locale'));


        // dd(session('app_locale'));
        return $next($request);
    }
}
