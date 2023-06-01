<?php

use App\Http\Controllers\Api\CantinaController;
use App\Http\Controllers\Api\PageController;
use App\Http\Controllers\Api\VitignosController;
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

Route::get('vinos', [PageController::class, 'index']);

Route::get('vinos/{id}', [PageController::class , 'show']);




Route::get('cantinas', [CantinaController::class, 'index']);

Route::get('cantinas/{id}', [CantinaController::class, 'show']);




Route::get('vitignos', [VitignosController::class, 'index']);

Route::get('vitignos/{id}', [VitignosController::class, 'show']);
