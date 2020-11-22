<?php

use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/vagas', [PageController::class, 'vagas'])->name('vagas');
    Route::get('/vagas/store', [PageController::class, 'formularioVagas'])->name('formularioVagas');
});
