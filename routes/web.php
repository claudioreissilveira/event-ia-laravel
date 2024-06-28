<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;


Route::get('/', [EventosController::class, 'index']);
Route::get('/contato', [EventosController::class, 'contato']);
Route::get('/eventos', [EventosController::class, 'eventos']);
Route::get('/create', [EventosController::class, 'create']);
Route::post('/store', [EventosController::class, 'store']);
Route::delete('/delete', [EventosController::class, 'delete']);
Route::get('/{id}/edit', [EventosController::class, 'edit']);
Route::put('/update', [EventosController::class, 'update']);
