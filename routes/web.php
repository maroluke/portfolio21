<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\CVRequestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{locale?}', function ($locale = null, $langs = null) {
    if ( !empty( $_SERVER[ 'HTTP_ACCEPT_LANGUAGE' ] )) {
        $langs = explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] );
    }

    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        App::setLocale($locale);
    } else {
        foreach ( $langs as $lang ){
			$lang = substr( $lang, 0, 2 );
			if( in_array( $lang, config('app.available_locales') ) ) {
				App::setLocale($lang);
                session()->put('locale', $lang);
			}
        }
    }

    return view('welcome', ['local']);
});

Route::post('submitCvEmail', [CvRequestController::class, 'mailSend']);

Route::post('submitNlEmail', [CvRequestController::class, 'mailSend']);