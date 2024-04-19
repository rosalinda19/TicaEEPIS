<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJudulRequest;
use App\Models\Judul;

class JudulController extends Controller
{
    public function create()
    {
        return view('mahasiswa.judul.create');
    }
    public function store(StoreJudulRequest $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'dosen_id' => 'required',
        ]);

        $judul = new Judul;
        $judul->judul = $request->judul;
        $judul->deskripsi = $request->deskripsi;
        $judul->dosen_id = $request->dosen_id;
        $judul->mahasiswa_id = auth()->user()->mahasiswa->id;
        $judul->status = 'pending';
        $judul->save();

        return redirect()->route('mahasiswa.judul.index');
    }
}
