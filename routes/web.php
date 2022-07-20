<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AtosController,
};



Route::get('/', [AtosController::class, 'index'])->name('atos.index');
Route::get('/{id}', [AtosController::class, 'show'])->name('atos.show');

