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

Route::get('/', 'App\Http\Controllers\Controller@inicial');
Route::get('/geral', 'App\Http\Controllers\Controller@geral');
Route::get('/administrativo', 'App\Http\Controllers\Controller@administrativo');
Route::get('/pessoas', 'App\Http\Controllers\PessoasController@index');
Route::get('/registros', 'App\Http\Controllers\RegistrosController@index');
Route::get('/unidades', 'App\Http\Controllers\UnidadesController@index');
Route::resource('/vacinas', App\Http\Controllers\VacinasController::class);