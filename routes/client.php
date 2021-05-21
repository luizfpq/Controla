<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;

Route::view('/client', 'client')->name('client');
Route::get('/client.list', [ClientsController::class, 'list'])->name('client.list');

Route::view('/client.create', 'client.create')->name('client.create');
Route::post('/client.create', [ClientsController::class, 'create'])->name('client.create');
