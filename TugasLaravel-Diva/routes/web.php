<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StasiunController;

Route::get('/', function () {
    return view('welcome');
});

// Route buat tampilin daftar stasiun berhantu
Route::get('/stasiun', [StasiunController::class, 'index']);
