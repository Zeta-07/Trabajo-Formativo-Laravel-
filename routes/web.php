<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/musicas', [MusicaController::class, 'getMusicas']);
