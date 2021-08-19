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

Route::get('/', 'App\Http\Controllers\Controller@login');
Route::get('/painel', 'App\Http\Controllers\Controller@painel');
Route::resource('/despesas', App\Http\Controllers\DespesasController::class);
Route::resource('/financas', App\Http\Controllers\FinancasController::class);
Route::get('/usuario', 'App\Http\Controllers\Controller@usuario');