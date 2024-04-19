<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        //
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
