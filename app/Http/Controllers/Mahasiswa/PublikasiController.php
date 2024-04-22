<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;

class PublikasiController extends Controller
{
    public function create()
    {
        return view('mahasiswa.publikasi.create');
    }

    public function store()
    {
        // Store the data
    }
}
