<?php

use App\Http\Controllers\Site\{ExploradoresController};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\ItensController;

//rotas exploradores
Route::delete('/exploradores/{id}', [ExploradoresController::class, 'destroy'])->name('exploradores.destroy');
Route::put('/exploradores/{id}', [ExploradoresController::class, 'update'])->name('exploradores.update');
Route::get('/exploradores/{id}/edit', [ExploradoresController::class, 'edit'])->name('exploradores.edit');
Route::get('/exploradores/create', [ExploradoresController::class, 'create'])->name('exploradores.create');
Route::get('/exploradores/{id}', [ExploradoresController::class, 'show'])->name('exploradores.show');
Route::post('/exploradores', [ExploradoresController::class, 'store'])->name('exploradores.store');
Route::get('/exploradores', [ExploradoresController::class, 'index'])->name('exploradores.index');

//rotas itens
Route::get('/itens', [ItensController::class, 'create'])->name('itens.create');

Route::get('/', function () {
    return view('welcome');
});
