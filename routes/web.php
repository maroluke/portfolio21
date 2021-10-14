<?php

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

Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('welcome');
})->name('home');

Route::get('/', function () {
    App::setLocale('de');
    return view('welcome');
})->name('home');

// Route::group(['prefix' => LaravelLocalization::setLocale()], function()
// {
// 	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
// 	Route::get('/', function()
// 	{
// 		return view('welcome');
// 	});
// });

// Route::post('/', function(Request $request) {
//     // Mail::send(new ForwardEmailInput($request));
//     return Redirect::back()->width('email', $request);
// });

Route::post('submitCvEmail', [CvRequestController::class, 'mailSend']);

Route::post('submitNlEmail', [CvRequestController::class, 'mailSend']);