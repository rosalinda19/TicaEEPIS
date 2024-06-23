<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mahasiswa\StoreFinal;
use App\Http\Requests\Mahasiswa\StoreProgress;
use App\Http\Requests\Mahasiswa\StoreProposal;
use App\Models\Judul;
use App\Models\Kategori;
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

    public function createFinal()
    {
        return view('mahasiswa.seminar.final.create');
    }

    public function storeProposal(StoreProposal $request)
    {
        $validatedData = $request->validated();

        $proposal = new Seminar();
        $proposal->judul_id = Judul::where('mahasiswa_id', auth()->id())->first()->id;
        $proposal->kategori_id = Kategori::where('nama', 'proposal')->first()->id;

        $proposal->fill($validatedData);

        $proposal->laporan = $request->file('laporan')->store('laporan', 'public');
        $proposal->penerima_naskah = $request->file('penerima_naskah')->store('penerima-naskah', 'public');
        $proposal->seminar_tesis = $request->file('seminar_tesis')->store('seminar-tesis', 'public');
        $proposal->lembar_monitoring = $request->file('lembar_monitoring')->store('lembar-monitoring', 'public');
        $proposal->ppt = $request->file('ppt')->store('ppt', 'public');

        $proposal->save();

        return redirect()->route('mahasiswa.dashboard');
    }

    public function storeProgress(StoreProgress $request)
    {
        $validatedData = $request->validated();

        $progress = new Seminar();

        $progress->judul_id = Judul::where('mahasiswa_id', auth()->id())->first()->id;
        $progress->fill($validatedData);

        $progress->kategori_id = Kategori::where('nama', $progress->kategori_id)->first()->id;
        $progress->laporan = $request->file('laporan')->store('laporan', 'public');
        $progress->penerima_naskah = $request->file('penerima_naskah')->store('penerima-naskah', 'public');
        $progress->seminar_tesis = $request->file('seminar_tesis')->store('seminar-tesis', 'public');
        $progress->lembar_monitoring = $request->file('lembar_monitoring')->store('lembar-monitoring', 'public');
        $progress->ppt = $request->file('ppt')->store('ppt', 'public');
        $progress->video_demo = $request->file('video_demo')->store('video-demo', 'public');

        $progress->save();

        return redirect()->route('mahasiswa.dashboard');
    }

    public function storeFinal(StoreFinal $request)
    {
        $validatedData = $request->validated();

        $final = new Seminar();
        $final->judul_id = Judul::where('mahasiswa_id', auth()->id())->first()->id;
        $final->kategori_id = Kategori::where('nama', 'final')->first()->id;
        $final->fill($validatedData);

        $final->laporan = $request->file('laporan')->store('laporan', 'public');
        $final->penerima_naskah = $request->file('penerima_naskah')->store('penerima-naskah', 'public');
        $final->seminar_tesis = $request->file('seminar_tesis')->store('seminar-tesis', 'public');
        $final->lembar_monitoring = $request->file('lembar_monitoring')->store('lembar-monitoring', 'public');
        $final->ppt = $request->file('ppt')->store('ppt', 'public');
        $final->video_demo = $request->file('video_demo')->store('video-demo', 'public');

        $final->save();

        return redirect()->route('mahasiswa.dashboard');
    }
}
