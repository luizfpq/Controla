<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::view('/profile', 'profile')->name('profile');
    Route::put('/profile', [ProfileController::class], 'update')
        ->name('profile.update');


    /* Routes from clients */
    require __DIR__.'/client.php';
    /* Routes from suppliers */
    require __DIR__.'/supplier.php';
    /* Routes from products */
    require __DIR__.'/product.php';
    /* Routes from stock */
    require __DIR__.'/stock.php';
});



require __DIR__.'/auth.php';
