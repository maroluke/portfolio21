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

// Route::get('/{locale?}', [LocaleController::class, 'setLocale']);
// Route::get('/{locale?}', function ($locale = null) {
//     $clientLocale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);

//     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
//         app()->setLocale($locale);
//         session()->put('locale', $locale);
//     } elseif (in_array($clientLocale, config('app.available_locales'))) {
//         app()->setLocale($clientLocale);
//         session()->put('locale', $clientLocale);
//     }

//     return view('welcome');
// });

// Route::get('/{locale?}', function ($locale = null) {
//     if(!isset($locale)) {
//         $locale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
//     }
//     app()->setLocale($locale);
//     session()->put('locale', $locale);
//     return view('welcome');
// });

Route::get('/{locale?}', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        App::setLocale($locale);
    }

    if (empty($locale)) {
        $locale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        if (in_array($locale, config('app.available_locales'))) {
            App::setLocale($locale);
        }
    }

    return view('welcome');
});

// Route::get('/{locale?}', function ($locale = null) {
//     $clientLocale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);

//     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
//         app()->setLocale($locale);
//     } elseif (in_array($clientLocale, config('app.available_locales'))) {
//         app()->setLocale($clientLocale);
//     }

//     return view('welcome');
// });

// Route::get('/{locale}', function ($locale) {
//     app()->setLocale($locale);
//     session()->put('locale', $locale);
//     return redirect()->back();
// });

Route::post('submitCvEmail', [CvRequestController::class, 'mailSend']);

Route::post('submitNlEmail', [CvRequestController::class, 'mailSend']);

// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => [ 'localeSessionRedirect', 'localeViewPath' ]
//     ], function () {
//         /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
//         Route::get('/', function()
//         {
//             return view('welcome');
//         });

//         // Route::get('test',function(){
//         // 	return View::make('test');
//         // });

//         
// });

// Route::get('/', function ($locale) {
//     $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//     app()->setLocale($locale);
//     session()->put($lang, $locale);

//     return redirect()->back();
// });

// Route::group(
// 	[
// 		'prefix' => LaravelLocalization::setLocale(),
// 		'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
// 	],
// 	function()
// 	{
// 		/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
// 		Route::get('/', function($)
// 		{
// 			return view('welcome');
// 		});
// 	});

// Route::post('/', function(Request $request) {
//     // Mail::send(new ForwardEmailInput($request));
//     return Redirect::back()->width('email', $request);
// });