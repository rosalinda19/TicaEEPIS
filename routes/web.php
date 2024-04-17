<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Mahasiswa\DataPublikasiController;
use App\Http\Controllers\Mahasiswa\JudulController;
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
})->name('landing');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/', function () {
        return view('mahasiswa/dashboard');
    })->name('dashboard');
    Route::prefix('/pengajuan-judul')->name('pengajuan-judul')->group(function () {
        Route::get('/', [JudulController::class, 'create']);
        Route::post('/', [JudulController::class, 'store'])->name('.store');
    });
    Route::prefix('/seminar-proposal')->name('seminar-proposal')->group(function () {
        Route::get('/', function () {
            return view('mahasiswa/seminar-proposal');
        });
    });
    Route::prefix('/progress-tesis')->name('progress-tesis')->group(function () {
        Route::get('/', function () {
            return view('mahasiswa/progress-tesis');
        });
    });
    Route::get('/final-tesis')->name('final-tesis');
    Route::get('/revisi')->name('revisi');
    Route::get('/publikasi')->name('publikasi');
    Route::resource('/data-publikasi', DataPublikasiController::class);
});

Route::prefix('kaprodi')->group(function () {
    Route::get('/')->name('kaprodi.dashboard');
});

Route::get('/bukti', function () {
    return view('Front/Bukti-publikasi');
});

require __DIR__ . '/auth.php';
