<?php

use App\Http\Controllers\Site\{ExploradoresController};
use Illuminate\Support\Facades\Route;

Route::post('/exploradores', [ExploradoresController::class, 'store'])->name('exploradores.store');
Route::get('/exploradores/create', [ExploradoresController::class, 'create'])->name('exploradores.create');
Route::get('/exploradores', [ExploradoresController::class, 'index'])->name('exploradores.index');
// Route::post('/exploradores', [ExploradoresController::class,'store'])->name('exploradores.store');

Route::get('/', function () {
    return view('welcome');
});
