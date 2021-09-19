<?php

use App\Http\Controllers\CVRequestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::post('/', function(Request $request) {
//     // Mail::send(new ForwardEmailInput($request));
//     return Redirect::back()->width('email', $request);
// });

Route::post('submitEmail', [CvRequestController::class, 'mailSend']);