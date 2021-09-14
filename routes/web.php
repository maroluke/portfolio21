<?php

use App\Mail\ForwardEmailInput;
use App\Mail\Mailtrap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/send/email', 'CVRequestController@mail');

Route::get('/send-mail', function () {
    Mail::to('hello@nonko.space')->send(new Mailtrap()); 
    return 'A message has been sent to Mailtrap!';
});