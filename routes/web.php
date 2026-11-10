<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HorarioController;

use App\Http\Controllers\TiendaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/horario', [HorarioController::class, 'index']);

Route::get('/producto/{numero}', [TiendaController::class, 'producto']);

