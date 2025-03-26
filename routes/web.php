<?php

use App\Http\Controllers\TipoProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tipos-produtos', [TipoProdutoController::class, 'index'])->name('tipos.index');
