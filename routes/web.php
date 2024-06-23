<?php

use App\Http\Controllers\Mahasiswa\DashboradController;
use App\Http\Controllers\Mahasiswa\DataPublikasiController;
use App\Http\Controllers\Mahasiswa\JudulController;
use App\Http\Controllers\Mahasiswa\PublikasiController;
// use App\Http\Controllers\Mahasiswa\PublikasiController;
use App\Http\Controllers\Mahasiswa\RevisiController;
use App\Http\Controllers\Mahasiswa\SeminarController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () {
        if (auth()->user()->hasRole('mahasiswa')) {
            return redirect()->route('mahasiswa.dashboard');
        }
        if (auth()->user()->hasRole('kaprodi')) {
            return redirect()->route('kaprodi.dashboard');
        }
    })->name('dashboard');

    Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
        Route::get('/', [DashboradController::class, 'index'])->name('dashboard');
        Route::prefix('/pengajuan-judul')->name('pengajuan-judul')->group(function () {
            Route::get('/', [JudulController::class, 'create']);
            // Route::get('/judul', [JudulController::class, 'store']);
            Route::post('/', [JudulController::class, 'store']);
        });
        Route::prefix('/seminar-proposal')->name('seminar-proposal')->group(function () {
            Route::get('/', [SeminarController::class, 'createProposal']);
            Route::post('/', [SeminarController::class, 'storeProposal']);
        });
        Route::prefix('/progress-tesis')->name('progress-tesis')->group(function () {
            Route::get('/', [SeminarController::class, 'createProgress']);
            Route::post('/', [SeminarController::class, 'storeProgress']);
        });
        Route::prefix('/final-tesis')->name('final-tesis')->group(function () {
            Route::get('/', [SeminarController::class, 'createFinal']);
            Route::post('/', [SeminarController::class, 'storeFinal']);
        });
        Route::prefix('/revisi')->name('revisi')->group(function () {
            Route::get('/', [RevisiController::class, 'create']);
            Route::post('/', [RevisiController::class, 'store']);
        });
        Route::prefix('/publikasi')->name('publikasi')->group(function () {
            Route::get('/', [PublikasiController::class, 'create']);
            Route::post('/', [PublikasiController::class, 'store']);
        });
        Route::prefix('/data-publikasi')->name('data-publikasi')->group(function () {
            Route::get('/', [DataPublikasiController::class, 'create']);
            Route::post('/', [DataPublikasiController::class, 'store']);
        });
        Route::get('/test', [RevisiController::class, 'test']);
    });

    Route::prefix('kaprodi')->name('kaprodi.')->group(function () {
        Route::get('/', function () {
            return view('kaprodi/dashboard');
        })->name('dashboard');
        Route::get('/pengajuan-judul', function () {
            return view('kaprodi/pengajuan-judul');
        })->name('pengajuan-judul');
    });
});



Route::get('/bukti', function () {
    return view('Front/Bukti-publikasi');
});

require __DIR__ . '/auth.php';
