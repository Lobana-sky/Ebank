<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Setting;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

class LoadSettings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
          // Retrieve settings from the cache or database
          $setting = Cache::rememberForever('settings', function () {
            return Setting::first();
        });
        if ($setting) {
            Session::put('app_name', $setting['app_name']);
            Session::put('logo',$setting['logo']);
            Session::put('about_text',$setting['about_text']);
            Session::put('mobile',$setting['mobile']);
            Session::put('address',$setting['address']);
            Session::put('email',$setting['email']);
            Session::put('facebook',$setting['facebook']);
            Session::put('instagram',$setting['instagram']);
            Session::put('twitter',$setting['twitter']);
            Session::put('telegram',$setting['telegram']);
        }
        return $next($request);
    }
}
