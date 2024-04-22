<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mahasiswa\StoreRevisi;
use App\Models\Judul;
use App\Models\Kategori;
use App\Models\Revisi;
use App\Models\Seminar;

class RevisiController extends Controller
{
    public function create()
    {
        return view('mahasiswa.revisi.create');
    }

    public function store(StoreRevisi $request)
    {
        $validatedData = $request->validated();
        $revisi = new Revisi();
        $revisi->fill($validatedData);
        $judul_id = Judul::where('mahasiswa_id', auth()->id())->first()->id;
        $revisi->judul_id = Seminar::where('judul_id', $judul_id)->where('kategori_id', Kategori::where('nama', $request->kategori)->first()->id)->first()->id;
        dd($revisi->judul_id);
        $revisi->berkas_revisi = $request->file('berkas_revisi')->store('berkas-revisi');
        $revisi->save();
        return redirect()->route('mahasiswa.dashboard');
    }
}
