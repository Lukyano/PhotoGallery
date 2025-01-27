<?php

use App\Http\Controllers\AlbumsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AlbumsController::class, 'index']);
Route::get('/albums', [AlbumsController::class, 'index']);
Route::get('/create', [AlbumsController::class, 'create']);
