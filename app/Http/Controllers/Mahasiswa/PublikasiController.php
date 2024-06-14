<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;

// Route::get('/publikasi/create', [PublikasiController::class, 'create']);
// Route::post('/publikasi/store', [PublikasiController::class, 'store'])->name('publikasi.store');

class PublikasiController extends Controller
{
    public function create()
    {
        return view('mahasiswa.publikasi.create');
    }

    public function store()
    {
        echo request('nrp');
        // Store the data
    }
}
