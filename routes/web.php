<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'show']);

Route::get('/products', [ProductController::class, 'show'])->name('products.show');
Route::get('/new-product', [ProductController::class, 'new'])->name('product.new');
Route::post('/new-product', [ProductController::class, 'store'])->name('product.store');

Route::get('/update-product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::post('/update-product/{id}', [ProductController::class, 'store_update'])->name('product.store_update');

Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('product.delete');
