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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::view('cliente', 'clientes.index')
    ->name('clientes');
    Route::view('sucursales', 'sucursales.index')
    ->name('sucursales');
    Route::view('paquetes', 'paquetes.index')
    ->name('paquetes');
    Route::view('empleados', 'empleados.index')
    ->name('empleados');
    Route::view('opciones', 'opciones.index')
    ->name('opciones');
    Route::view('paqueteOpciones', 'paqueteOpciones.index')
    ->name('paqueteOpciones');
    Route::view('reservaciones', 'reservaciones.index')
    ->name('reservaciones');
    Route::view('labores', 'labores.index')
    ->name('labores');
    Route::view('categorias', 'categorias.index')
    ->name('categorias');
});

