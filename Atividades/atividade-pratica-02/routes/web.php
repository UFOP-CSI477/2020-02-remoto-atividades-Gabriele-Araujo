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
    return view('site.geral');
})->name('site.geral');

Route::get('/administrativo', function () {
    return view('site.administrativo');
})->name('site.administrativo');

Route::get('/suporte', function () {
    return view('site.suporte');
})->name('site.suporte');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
