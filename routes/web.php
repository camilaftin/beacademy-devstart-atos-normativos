<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\PDF;

use App\Http\Controllers\{
    AtosController,
    PDFController,
    UserController,
};

/* -- ROTAS DOS ATOS -- */
Route::put('/{id}', [AtosController::class, 'update'])->name('atos.update');
Route::get('/edit/{id}', [AtosController::class, 'edit'])->name('atos.edit');
Route::delete('/{id}', [AtosController::class, 'destruir'])->name('atos.destruir');
Route::get('/criar', [AtosController::class, 'criar'])->name('atos.criar');
Route::post('/cria', [AtosController::class, 'store'])->name('atos.store');
Route::get('/', [AtosController::class, 'index'])->name('atos.index');
Route::get('/{id}', [AtosController::class, 'show'])->name('atos.show');

/* -- ROTAS DO PDF -- */
Route::get('/pdf/view',[PDFController::class, 'pdfView'])->name('pdf.view');
Route::get('/downloadPDF/convert',[PDFController::class, 'pdfGeneration'])->name('pdf.convert');

/* -- ROTAS DOS USERS -- */
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');