<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RevisiController extends Controller
{
    public function create()
    {
        return view('mahasiswa.revisi.create');
    }

    public function store()
    {
        // Store the data
    }
}
