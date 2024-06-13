<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Mahasiswa\PublikasiController;

Route::get('/publikasi/create', [PublikasiController::class, 'create']);
Route::post('/publikasi/store', [PublikasiController::class, 'store'])->name('publikasi.store');

// class PublikasiController extends Controller
// {
//     public function create()
//     {
//         return view('mahasiswa.publikasi.create');
//     }

//     public function store()
//     {
//         // Store the data
//     }
// }
