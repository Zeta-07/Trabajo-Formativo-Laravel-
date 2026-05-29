<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/musicas', [MusicaController::class, 'getMusicas']);
Route::get('/musicas/{id}', [MusicaController::class, 'getMusica']);
Route::post('/musicas', [MusicaController::class, 'createMusica']);
Route::put('/musicas/{id}', [MusicaController::class, 'updateMusica']);
Route::delete('/musicas/{id}', [MusicaController::class, 'deleteMusica']);