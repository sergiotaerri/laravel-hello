<?php

use App\Http\Controllers\EnderecoController;
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
Route::get('/enderecos', [EnderecoController::class, 'index']);
Route::get('/enderecos/{id}', [EnderecoController::class, 'show']);
Route::post('/enderecos', [EnderecoController::class, 'store']);
Route::put('/enderecos/{id}', [EnderecoController::class, 'update']);
Route::delete('/enderecos/{id}', [EnderecoController::class, 'delete']);
