<?php

use App\Http\Controllers\CantinaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VinoController;
use App\Http\Controllers\VitignoController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CantinaController as AdminCantinaController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\VinoController as AdminVinoController;
use App\Http\Controllers\Admin\VitignoController as AdminVitignoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('cantine' , [CantinaController::class, 'index'])->name('cantine');
// Route::get('vino' , [VinoController::class, 'index'])->name('vini');
// Route::get('vitigno' , [VitignoController::class, 'index'])->name('vitigni');

Route::middleware([])->prefix('guest')->name('guest.')->group(function(){
    Route::get('cantine' , [CantinaController::class, 'index'])->name('cantine');
    Route::get('vini' , [VinoController::class, 'index'])->name('vini');
    Route::get('vitigni' , [VitignoController::class, 'index'])->name('vitigni');
    Route::get('cantine/filter', [CantinaController::class, 'filter'])->name('filter');
});


Route::middleware(['auth','verified'] )->name('admin.')->prefix('admin')->group(function() {

    Route::get('dashboard', [PageController::class, 'home'])->name('dashboard');

    Route::resource('cantina',AdminCantinaController::class);
    Route::resource('vino',AdminVinoController::class);
    Route::resource('vitignos',AdminVitignoController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
