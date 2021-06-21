<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuppliersController;

Route::view('/supplier', 'supplier')->name('supplier');
Route::get('/supplier.list', [SuppliersController::class, 'list'])->name('supplier.list');


Route::view('/supplier.create', 'supplier.create')->name('supplier.create');
Route::post('/supplier.create', [SuppliersController::class, 'create'])->name('supplier.create');
Route::get('/supplier.edit/{id}', [SuppliersController::class, 'edit'])->name('supplier.edit');
Route::put('/supplier.update/{id}', [SuppliersController::class, 'update'])->name('supplier.update');
Route::get('/supplier.delete/{id}', [SuppliersController::class, 'delete'])->name('supplier.delete');

