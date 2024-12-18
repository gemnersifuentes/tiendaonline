<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

  
});

 /*rutas del cotrolador cliente */
 Route::get('/clientes',[ClienteController::class,'index']) ->name('clientes.index');

 Route::get('/clientes/create',[ClienteController::class,'create']) ->name('clientes.create');

 Route::post('/clientes',[ClienteController::class,'store']) ->name('clientes.store');

 Route::get('/clientes/{cliente}/edit',[ClienteController::class,'edit']) ->name('clientes.edit');

 Route::put('/clientes/{cliente}',[ClienteController::class,'update']) ->name('clientes.update');

 Route::delete('/clientes/{cliente}',[ClienteController::class,'destroy']) ->name('clientes.destroy');


