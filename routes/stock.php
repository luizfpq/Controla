<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StocksController;

Route::view('/stock', 'stock')->name('stock');
Route::get('/stock.list', [StocksController::class, 'list'])->name('stock.list');


Route::view('/stock.create', 'stock.create')->name('stock.create');
Route::post('/stock.create', [StocksController::class, 'create'])->name('stock.create');
Route::get('/stock.edit/{id}', [StocksController::class, 'edit'])->name('stock.edit');
Route::put('/stock.update/{id}', [StocksController::class, 'update'])->name('stock.update');
Route::get('/stock.delete/{id}', [StocksController::class, 'delete'])->name('stock.delete');

