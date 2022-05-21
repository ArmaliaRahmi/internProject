<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CaptchaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login');
});
// Route::get('/login', 'LoginController@login')->name('login');
// Route::post('loginaksi', 'LoginController@loginaksi')->name('loginaksi');
// Route::get('home', 'HomeController@index')->name('home')->middleware('auth');
// Route::get('logoutaksi', 'LoginController@logoutaksi')->name('logoutaksi')->middleware('auth');
// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/home', function () {
    return view('home');
});

Route::get('/task', [TaskController::class, 'index'])->name('task');
Route::get('/task/addtask', [TaskController::class, 'addtask'])->name('task');
Route::post('/task', [TaskController::class, 'store'])->name('task');

Route::get('/bar1', function () {
    return view('bar1');
});
Route::get('/calender', function () {
    return view('calender');
});
Route::get('/chat', function () {
    return view('chat');
});
// Route::get('/broadcast', function () {
//     return view('broadcast');
// });
Route::get('/broadcast', [BroadcastController::class, 'index'])->name('broadcast');

Route::get('/client', function () {
    return view('client');
});
Route::get('/report', function () {
    return view('report');
});

Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::get('/contact-form', [CaptchaController::class, 'register']);
Route::post('/captcha-validation', [CaptchaController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [CaptchaController::class, 'reloadCaptcha']);

Route::get('/contact-form', [loginController::class, 'register']);
Route::post('/captcha-validation', [CaptchaController::class, 'capthcaFormValidate']);
