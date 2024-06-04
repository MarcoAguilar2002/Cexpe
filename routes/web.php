<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanzaController;
use App\Http\Controllers\BaileController;
use App\Http\Controllers\OratoriaController;
use App\Http\Controllers\LiderazgoController;


Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('programas', function () {
    return view('programas');
})->name('programas');

Route::get('talleres', function () {
    return view('talleres');
})->name('talleres');

Route::get('asesoramiento', function () {
    return view('asesoramiento');
})->name('asesoramiento');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');


Route::get('talleres/danza', [DanzaController::class, 'index'])->name('talleres.danza');
Route::get('talleres/baile', [BaileController::class, 'index'])->name('talleres.baile');
Route::get('talleres/oratoria', [OratoriaController::class, 'index'])->name('talleres.oratoria');
Route::get('talleres/liderazgo', [LiderazgoController::class, 'index'])->name('talleres.liderazgo');