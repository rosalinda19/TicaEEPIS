<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mahasiswa\StoreDataPublikasi;
use App\Models\DataPublikasi;
use Illuminate\Http\Request;

class DataPublikasiController extends Controller
{
    public function index()
    {
        return view('mahasiswa.data-publikasi.index');
    }

    public function create()
    {
        return view('mahasiswa.data-publikasi.create');
    }

    public function store(StoreDataPublikasi $request)
    {
        $validatedData = $request->validated();
        $dataPublikasi = new DataPublikasi();
        $dataPublikasi->fill($validatedData);
        $dataPublikasi->mahasiswa_id = auth()->id();
        $dataPublikasi->berkas_publikasi = $request->file('berkas_publikasi')->store('berkas-publikasi', 'public');
        $dataPublikasi->save();
        return redirect()->route('mahasiswa.dashboard');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('mahasiswa.data-publikasi.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
