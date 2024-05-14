<?php

use App\Http\Controllers\TenistasController;
use App\Http\Controllers\TorneosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Hola  y adios
Route::get('hola', function () {
    return 'Hola y adios';
});

//Rutas para tenistas.
Route::group(['prefix' => 'tenistas'], function () {
    Route::get('/', [TenistasController::class, 'index'])->name('tenistas.index')->middleware(['auth', 'admin']);
    Route::get('/create', [TenistasController::class, 'create'])->name('tenistas.create')->middleware(['auth', 'admin']);
    Route::post('/', [TenistasController::class, 'store'])->name('tenistas.store')->middleware(['auth','admin']);
    Route::get('/{tenista}', [TenistasController::class, 'show'])->name('tenistas.show');
    Route::get('/{tenista}/edit', [TenistasController::class, 'edit'])->name('tenistas.edit')->middleware(['auth','admin']);
    Route::put('/{tenista}', [TenistasController::class, 'update'])->name('tenistas.update')->middleware(['auth','admin']);
    Route::delete('/{tenista}', [TenistasController::class, 'destroy'])->name('tenistas.destroy')->middleware(['auth','admin']);
    Route::get('/{tenista}/edit-image', [TenistasController::class, 'editImage'])->name('tenistas.editImage')->middleware(['auth','admin']);
    Route::patch('/{tenista}/edit-image', [TenistasController::class, 'updateImage'])->name('tenistas.updateImage')->middleware(['auth','admin']);
});

//Rutas para torneos
Route::group(['prefix' => 'torneos'], function () {
    Route::get('/', [TorneosController::class, 'index'])->name('torneos.index')->middleware(['auth', 'admin']);
    Route::get('/create', [TorneosController::class, 'create'])->name('torneos.create')->middleware(['auth', 'admin']);
    Route::post('/', [TorneosController::class, 'store'])->name('torneos.store')->middleware(['auth','admin']);
    Route::get('/{torneo}', [TorneosController::class, 'show'])->name('torneos.show');
    Route::get('/{torneo}/edit', [TorneosController::class, 'edit'])->name('torneos.edit')->middleware(['auth','admin']);
    Route::put('/{torneo}', [TorneosController::class, 'update'])->name('torneos.update')->middleware(['auth','admin']);
    Route::delete('/{torneo}', [TorneosController::class, 'destroy'])->name('torneos.destroy')->middleware(['auth','admin']);
    Route::get('/{torneo}/edit-image', [TorneosController::class, 'editImage'])->name('torneos.editImage')->middleware(['auth','admin']);
    Route::patch('/{torneo}/edit-image', [TorneosController::class, 'updateImage'])->name('torneos.updateImage')->middleware(['auth','admin']);
});
