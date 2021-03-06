<?php

use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\VagaController;
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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/usuario', [UsuarioController::class, 'index']);
    Route::post('/vagas/store', [VagaController::class, 'store']);
    Route::post('/vagas/update/{vagaId}', [VagaController::class, 'update']);
    Route::get('/vagas/resgatarVagas', [VagaController::class, 'resgatarVagas']);
    Route::get('/vagas/resgatarVaga', [VagaController::class, 'resgatarVaga']);
});
