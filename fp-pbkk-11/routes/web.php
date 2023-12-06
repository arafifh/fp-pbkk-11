<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NikController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\ProfileController;

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

Route::middleware('auth')->group(function () {
    Route::prefix('pemilih')->group(function () {
        Route::get('/form', [PemilihController::class, 'index']);
        Route::post('/submit', [PemilihController::class, 'createPemilih'])->name('pemilih.create');
        Route::get('/data', [PemilihController::class, 'getPemilih'])->name('pemilih.data');
        Route::get('/data/{id}', [PemilihController::class, 'getPemilihById'])->name('pemilih.data-by-id');
        Route::get('/edit/{id}', [PemilihController::class, 'editPemilih'])->name('pemilih.edit');
        Route::put('/update/{id}', [PemilihController::class, 'updatePemilih'])->name('pemilih.update');
        Route::get('/delete/{id}', [PemilihController::class, 'deletePemilih'])->name('pemilih.delete');
    });

    Route::prefix('nik')->group(function () {
        Route::get('/form', [NikController::class, 'index']);
        Route::post('/submit', [NikController::class, 'checkNik'])->name('nik.submit');
        Route::get('/data', [NikController::class, 'getNik'])->name('nik.data');
        Route::get('/1', [NikController::class, 'status1'])->name('nik.1');
        Route::get('/2', [NikController::class, 'status2'])->name('nik.2');
        Route::get('/3', [NikController::class, 'status3'])->name('nik.3');
    });
});

Route::get('/', function () {
    return view('welcome');
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
