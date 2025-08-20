<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\Inventario\ActivoController;
use App\Http\Controllers\Inventario\AsignacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas protegidas por auth
Route::middleware(['auth'])->group(function () {
    // Inventario general
    Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario.index');

    // Submódulos de inventario
    Route::get('/inventario/activos', [ActivoController::class, 'index'])->name('inventario.activos');
    Route::get('/inventario/asignaciones', [AsignacionController::class, 'index'])->name('inventario.asignaciones');

    //Crear Activo
    Route::get('/inventario/activos/create', [ActivoController::class, 'create'])->name('inventario.activos.create');
    Route::post('/inventario/activos', [ActivoController::class, 'store'])->name('inventario.activos.store');

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

