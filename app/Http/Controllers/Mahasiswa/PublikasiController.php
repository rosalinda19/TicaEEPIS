<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
