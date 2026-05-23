<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [ProdutoController::class, 'produtos'])->name('dashboard');

    Route::get('/buscar', [ProdutoController::class, 'buscar'])
    ->name('buscar.produtos');

    Route::get('/max', function () {
    return view('detalhar');
    })->name('produto.max');

    
});

require __DIR__.'/auth.php';
