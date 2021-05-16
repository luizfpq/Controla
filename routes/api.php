<?php


use App\Http\Controllers\LogController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\UpdateController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*
 * Rotas da Maquina 
 */
Route::post('machineAdd', [MachineController::class, 'machineAdd']);
Route::get('log', [LogController::class, 'Index']);
Route::post('logAdd', [LogController::class, 'logAdd']);

/*
 * Verificações de update 
 */
Route::get('checkUpdate', [UpdateController::class, 'Check']);

/*
 * Rotas de utilidade 
 */
Route::get('get_ip', function (Request $request) {
    return $request->ip();
});
