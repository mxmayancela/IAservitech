<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Models\Cliente;
use App\Http\Controllers\ClienteController;
use Illuminate\Models\Paquete;
use App\Http\Controllers\PaqueteController;



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

Route::apiResource('clientes',ClienteController::class);
//Route::apiResource('cliente/{id}',ClienteController::class);
Route::apiResource('paquetes',PaqueteController::class);


