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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return redirect('http://app_sso1.main.test/login');
})->name('login');

Route::get('/register', function () {
    return redirect('http://app_sso1.main.test/register');
})->name('register');

Route::get('/logout', function () {
    return redirect('http://app_sso1.main.test/logout');
})->name('logout');