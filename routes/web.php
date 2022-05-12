<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/bar1', function () {
    return view('bar1');
});
Route::get('/task', function () {
    return view('task');
});

Route::get('/sidebar1', function () {
    return view('sidebar1');
});
Route::get('/bar', function () {
    return view('bar');
});
Route::get('/dash', function () {
    return view('dash');
});
Route::get('/detailprofile', function () {
    return view('detailprofile');
});
Route::get('/calender', function () {
    return view('calender');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/broadcast', function () {
    return view('broadcast');
});
Route::get('/client', function () {
    return view('client');
});
Route::get('/report', function () {
    return view('report');
});
Route::get('/contact-form', [CaptchaController::class, 'register']);
Route::post('/captcha-validation', [CaptchaController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [CaptchaController::class, 'reloadCaptcha']);

Route::get('/contact-form', [loginController::class, 'register']);
Route::post('/captcha-validation', [CaptchaController::class, 'capthcaFormValidate']);