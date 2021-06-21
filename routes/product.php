<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::view('/product', 'product')->name('product');
Route::get('/product.list', [ProductsController::class, 'list'])->name('product.list');


Route::view('/product.create', 'product.create')->name('product.create');
Route::post('/product.create', [ProductsController::class, 'create'])->name('product.create');
Route::get('/product.edit/{id}', [ProductsController::class, 'edit'])->name('product.edit');
Route::put('/product.update/{id}', [ProductsController::class, 'update'])->name('product.update');
Route::get('/product.delete/{id}', [ProductsController::class, 'delete'])->name('product.delete');

