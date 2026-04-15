<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\GrupoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\IncidenciaController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('grupos', GrupoController::class);
Route::resource('alumnos', AlumnoController::class);
Route::resource('incidencias',IncidenciaController::class);
