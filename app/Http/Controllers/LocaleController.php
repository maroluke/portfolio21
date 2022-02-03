<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function setLocale(Request $request, $locale) {
        $clientLocale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);

        if (!empty($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        } elseif (in_array($clientLocale, config('app.available_locales'))) {
            app()->setLocale($clientLocale);
        }

        return view('welcome');
    }
}
