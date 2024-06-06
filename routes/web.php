<?php

use App\Http\Controllers\TenistasController;
use App\Http\Controllers\TorneosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


// Hola  y adios
//Route::get('hola', function () {
//    return 'Hola y adios';
//});

//Rutas para tenistas.
Route::group(['prefix' => 'tenistas'], function () {
    Route::get('/', [TenistasController::class, 'index'])->name('tenistas.index');
    Route::get('/create', [TenistasController::class, 'create'])->name('tenistas.create');
    Route::post('/', [TenistasController::class, 'store'])->name('tenistas.store');

    Route::get('/pdf/{tenista}', [TenistasController::class, 'pdf'])->name('tenistas.pdf');
    Route::get('/vista', [TenistasController::class, 'vista'])->name('tenistas.vista');

    Route::get('/{tenista}/edit', [TenistasController::class, 'edit'])->name('tenistas.edit');
    Route::put('/{tenista}', [TenistasController::class, 'update'])->name('tenistas.update');
    Route::delete('/{tenista}', [TenistasController::class, 'destroy'])->name('tenistas.destroy');

    Route::get('/{tenista}/edit-image', [TenistasController::class, 'editImage'])->name('tenistas.editImage');
    Route::patch('/{tenista}/edit-image', [TenistasController::class, 'updateImage'])->name('tenistas.updateImage');

    Route::get('/{tenista}', [TenistasController::class, 'show'])->name('tenistas.show');
});



//Rutas para torneos
Route::group(['prefix' => 'torneos'], function () {
    Route::get('/', [TorneosController::class, 'index'])->name('torneos.index');
    Route::get('/create', [TorneosController::class, 'create'])->name('torneos.create');
    Route::post('/', [TorneosController::class, 'store'])->name('torneos.store');

    Route::get('/vista', [TorneosController::class, 'vista'])->name('torneos.vista');

    Route::get('/{torneo}', [TorneosController::class, 'show'])->name('torneos.show');
    Route::get('/{torneo}/edit', [TorneosController::class, 'edit'])->name('torneos.edit');
    Route::put('/{torneo}', [TorneosController::class, 'update'])->name('torneos.update');
    Route::delete('/{torneo}', [TorneosController::class, 'destroy'])->name('torneos.destroy');
    Route::get('/{torneo}/edit-image', [TorneosController::class, 'editImage'])->name('torneos.editImage');
    Route::patch('/{torneo}/edit-image', [TorneosController::class, 'updateImage'])->name('torneos.updateImage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
