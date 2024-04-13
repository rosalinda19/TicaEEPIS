<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Mahasiswa\DataPublikasiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('mahasiswa')->group(function () {
    Route::get('/pengajuan-judul')->name('mahasiswa.pengajuan-judul');
    Route::get('/seminar-proposal')->name('mahasiswa.seminar-proposal');
    Route::get('/progress-tesis')->name('mahasiswa.progress-tesis');
    Route::get('/final-tesis')->name('mahasiswa.final-tesis');
    Route::get('/revisi')->name('mahasiswa.revisi');
    Route::get('/publikasi')->name('mahasiswa.publikasi');
    Route::get('/data-publikasi', [DataPublikasiController::class, 'index'])->name('mahasiswa.data-publikasi');
});

Route::get('/bukti', function () {
    return view('Front/Bukti-publikasi');
});

require __DIR__ . '/auth.php';
