<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function createProposal()
    {
        return view('mahasiswa.seminar.proposal.create');
    }

    public function createProgress()
    {
        return view('mahasiswa.seminar.progress.create');
    }

    public  function createFinal()
    {
        return view('mahasiswa.seminar.final.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pembimbing' => 'required',
            'penguji' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'ruangan' => 'required',
        ]);

        $seminar = new Seminar;
        $seminar->judul = $request->judul;
        $seminar->pembimbing = $request->pembimbing;
        $seminar->penguji = $request->penguji;
        $seminar->tanggal = $request->tanggal;
        $seminar->jam = $request->jam;
        $seminar->ruangan = $request->ruangan;
        $seminar->mahasiswa_id = auth()->user()->mahasiswa->id;
        $seminar->status = 'pending';
        $seminar->save();

        return redirect()->route('mahasiswa.seminar.index');
    }
}
