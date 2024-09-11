<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index-products', [ProductController::class, 'index'])->name('product.index');

Route::get('/show-products/{product}', [ProductController::class, 'show'])->name('product.show');

Route::get('/create-products', [ProductController::class, 'create'])->name('product.create');

Route::post('/create-products', [ProductController::class, 'store'])->name('product.store');

Route::get('/edit-products/{product}', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/update-products/{product}', [ProductController::class, 'update'])->name('product.update');

Route::delete('/destroy-products/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/edit-report/{product}', [ProductController::class, 'report'])->name('product.report');