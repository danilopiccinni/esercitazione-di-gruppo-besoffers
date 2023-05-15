<?php

use App\Http\Controllers\CantinaController;
use App\Http\Controllers\VinoController;
use App\Http\Controllers\VitignoController;
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

Route::get('/', [VinoController::class , 'index']) ->name('vini');

Route::get('/cantine', [CantinaController::class , 'index'])->name('cantine');

Route::get('/vitigni', [VitignoController::class, 'index']) ->name('vitigni');

