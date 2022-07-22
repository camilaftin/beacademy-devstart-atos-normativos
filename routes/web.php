<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AtosController,
};

Route::put('/{id}', [AtosController::class, 'update'])->name('atos.update');
Route::get('/{id}/edit', [AtosController::class, 'edit'])->name('atos.edit');
Route::delete('/{id}', [AtosController::class, 'destruir'])->name('atos.destruir');
Route::get('/criar',[AtosController::class,'criar'])->name('atos.criar');
Route::post('/cria',[AtosController::class, 'store'])->name('atos.store');
Route::get('/', [AtosController::class, 'index'])->name('atos.index');
Route::get('/{id}', [AtosController::class, 'show'])->name('atos.show');



