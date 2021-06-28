<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellsController;

Route::view('/sell', 'sell')->name('sell');
Route::get('/sell.list', [SellsController::class, 'list'])->name('sell.list');


Route::view('/sell.create', 'sell.create')->name('sell.create');
Route::post('/sell.create', [SellsController::class, 'create'])->name('sell.create');
Route::get('/sell.edit/{id}', [SellsController::class, 'edit'])->name('sell.edit');
Route::put('/sell.update/{id}', [SellsController::class, 'update'])->name('sell.update');
Route::get('/sell.delete/{id}', [SellsController::class, 'delete'])->name('sell.delete');

