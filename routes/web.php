<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;

Route::get('/', [EventosController::class, 'home']);
Route::get('/contato', [EventosController::class, 'contato']);
Route::get('/eventos', [EventosController::class, 'index'])->name('eventos.index');
Route::get('/eventos/create', [EventosController::class, 'create'])->name('eventos.create');
Route::post('/eventos', [EventosController::class, 'store'])->name('eventos.store');
Route::get('/eventos/{id}/edit', [EventosController::class, 'edit'])->name('eventos.edit');
Route::put('/eventos/{id}', [EventosController::class, 'update'])->name('eventos.update');
Route::delete('/eventos/{id}', [EventosController::class, 'destroy'])->name('eventos.destroy');
