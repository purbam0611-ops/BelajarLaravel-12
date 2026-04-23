<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FineController;

Route::get('/', [FineController::class, 'index']);
Route::resource('fines', FineController::class);