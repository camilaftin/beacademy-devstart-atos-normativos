<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AtosController,
};

Route::delete('/{id}', [AtosController::class, 'destruir'])->name('atos.destruir');
Route::get('/criar',[AtosController::class,'criar'])->name('atos.criar');
Route::post('/cria',[AtosController::class, 'store'])->name('atos.store');
Route::get('/', [AtosController::class, 'index'])->name('atos.index');
Route::get('/{id}', [AtosController::class, 'show'])->name('atos.show');



