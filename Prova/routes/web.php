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
Route::resource('/geral', App\Http\Controllers\GeralController::class);
Route::get('/administrativo', 'App\Http\Controllers\Controller@administrativo');
Route::resource('/pessoas', App\Http\Controllers\PessoasController::class);
Route::resource('/registros', App\Http\Controllers\RegistrosController::class);
Route::resource('/unidades', App\Http\Controllers\UnidadesController::class);
Route::resource('/vacinas', App\Http\Controllers\VacinasController::class);