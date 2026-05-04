<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FineController;

// Pastikan ini mengarah ke file view yang baru kamu edit
Route::get('/', function () {
    return view('tugas_tailwind'); 
});
