<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mahasiswa\StorePublikasi;
use App\Models\Publikasi;

class PublikasiController extends Controller
{
    public function create()
    {
        return view('mahasiswa.publikasi.create');
    }

    public function store(StorePublikasi $request)
    {
        $validated = $request->validated();
        $validated['mahasiswa_id'] = auth()->user()->id;
        Publikasi::create($validated);
        return redirect()->route('mahasiswa.dashboard');
    }
}
