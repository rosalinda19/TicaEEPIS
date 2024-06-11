<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mahasiswa\StorePengajuanJudul;
use App\Models\Judul;

class JudulController extends Controller
{
    public function create()
    {
        return view('mahasiswa.judul.create');
        
    }
    
    public function store(StorePengajuanJudul $request)
    {
        $validatedData = $request->validated();
        $judul = new Judul;
        $judul->fill($validatedData);
        $judul->mahasiswa_id = auth()->id();
        $judul->save();
        return redirect()->route('mahasiswa.dashboard');
        // dd($judul);
    }
}
