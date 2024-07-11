<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/ingresar', [AlumnosController::class, 'create'])->name('ingresar.create');
Route::post('/ingresar/listo', [AlumnosController::class, 'store'])->name('ingresar.store');

Route::get('/lista', [AlumnosController::class, 'index'])->name('lista');
Route::get('/alumno/{id}', [AlumnosController::class, 'show'])->name('alumno.detalle');


