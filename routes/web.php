<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth','verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [ProdutoController::class, 'produtos'])->name('dashboard');

    Route::get('/buscar', [ProdutoController::class, 'buscar'])
    ->name('buscar.produtos');
    Route::get('/roupa/{id}', [ProdutoController::class, 'detalhar'])->name('roupa');
});

require __DIR__.'/auth.php';
