<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mahasiswa\StorePublikasi;
use App\Models\Judul;
use App\Models\Publikasi;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class PublikasiController extends Controller
{
    public function create()
    {
        return view('mahasiswa.publikasi.create');
    }

    public function store(Request $request)
    {
        $mahasiswa = User::find(auth()->user()->id);
        $judul = Judul::where('mahasiswa_id', $mahasiswa->id)->first();
        $request['mahasiswa_id'] = $mahasiswa->id;
        Publikasi::create($request->all());

        $request['nama'] = $mahasiswa->name;
        $request['nrp'] = $mahasiswa->nrp;
        $request['program_studi'] = $mahasiswa->programStudi->nama;
        $request['judul_penelitian'] = $judul->judul_penelitian;
        $request['dosen_pembimbing1'] = $judul->dosen_pembimbing1;
        $request['dosen_pembimbing2'] = $judul->dosen_pembimbing2;
        $request['dosen_pembimbing3'] = $judul->dosen_pembimbing3;

        $pdf = PDF::loadView('test', $request->all());

        // Option 1: Download the PDF
        return $pdf->download('my-report.pdf');
        // return redirect()->route('mahasiswa.dashboard');
    }
}
