<?php

use App\Http\Controllers\ProdottiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');


Route::get('/prodotti/create', [ProdottiController::class, 'create'])->name('prodotti.create');
Route::post('/prodotti/store', [ProdottiController::class, 'store'])->name('prodotti.store');
Route::get('/prodotti/index', [ProdottiController::class, 'index'])->name('prodotti.index');
Route::get('/prodotti/show/{prodotto}', [ProdottiController::class, 'show'])->name('prodotti.show');