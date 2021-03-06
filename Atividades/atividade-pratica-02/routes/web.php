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
    return view('principal');
})->name('principal');

Route::resource('/registros', App\Http\Controllers\RegistrosController::class);

Route::resource('/suporte', App\Http\Controllers\SuporteController::class);

//Route::get('/administrativo', 'App\Http\Controllers\BancoController@index');
Route::resource('/equipamentos', App\Http\Controllers\BancoController::class);