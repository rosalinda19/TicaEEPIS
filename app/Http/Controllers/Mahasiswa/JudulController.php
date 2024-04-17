<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JudulController extends Controller
{
    public function create()
    {
        return view('mahasiswa.judul.create');
    }
}
