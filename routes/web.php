<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ReporteController;

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/graficos', [DashboardController::class, 'showCharts']);

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::get('/clientes/edit', [ClienteController::class, 'edit'])->name('clientes.edit');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');
Route::get('/productos/{codigo}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{codigo}', [ProductoController::class, 'update'])->name('productos.update');

Route::get('/ventas/create', [VentaController::class, 'create'])->name('ventas.create');

Route::get('/reportes', [ReporteController::class, 'index'])->name('reportes.index');