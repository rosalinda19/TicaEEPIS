<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\Judul;
use App\Models\Kategori;
use App\Models\ProgramStudi;
use App\Models\Publikasi;
use App\Models\Revisi;
use App\Models\Seminar;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('kaprodi.dashboard');
    }

    public function pengajuanJudul()
    {
        $judul = Judul::all();
        foreach ($judul as $i) {
            $mahasiswa = User::where('id', $i->mahasiswa_id)->first();
            $i->nrp = $mahasiswa->nrp;
            $i->nama = $mahasiswa->name;
            $i->tanggal_upload = Carbon::parse($i->created_at)->format('d-m-Y');
            $i->prodi = ProgramStudi::where('id', $mahasiswa->program_studi_id)->first()->nama;
        }
        return view('kaprodi.pengajuan-judul', ['judul' => $judul]);
    }

    public function seminarProposal()
    {
        $proposal = Seminar::where('kategori_id', 1)->get();
        foreach ($proposal as $i) {
            $judul = Judul::where('id', $i->judul_id)->first();
            $mahasiswa = User::where('id', $judul->mahasiswa_id)->first();
            $i->nrp = $mahasiswa->nrp;
            $i->nama = $mahasiswa->name;
            $i->judul = $judul->judul_penelitian;
        }
        return view('kaprodi.proposal', ['proposal' => $proposal]);
    }

    public function progressTesis()
    {
        $progress = Seminar::whereIn('kategori_id', [2, 3])->orderBy('created_at', 'desc')->get();
        foreach ($progress as $i) {
            $judul = Judul::where('id', $i->judul_id)->first();
            $mahasiswa = User::where('id', $judul->mahasiswa_id)->first();
            $i->jenis_progress = Kategori::where('id', $i->kategori_id)->first()->nama;
            $i->nrp = $mahasiswa->nrp;
            $i->nama = $mahasiswa->name;
            $i->judul = $judul->judul_penelitian;
        }
        return view('kaprodi.progress', ['progress' => $progress]);
    }

    public function finalTesis()
    {
        $final = Seminar::where('kategori_id', 4)->get();
        foreach ($final as $i) {
            $judul = Judul::where('id', $i->judul_id)->first();
            $mahasiswa = User::where('id', $judul->mahasiswa_id)->first();
            $i->nrp = $mahasiswa->nrp;
            $i->nama = $mahasiswa->name;
            $i->judul = $judul->judul_penelitian;
        }
        return view('kaprodi.final', ['final' => $final]);
    }

    public function revisi()
    {
        $revisi = Revisi::all();
        foreach ($revisi as $i) {
            $seminar = Seminar::where('id', $i->seminar_id)->first();
            $judul = Judul::where('id', $seminar->judul_id)->first();
            $mahasiswa = User::where('id', $judul->mahasiswa_id)->first();
            $i->nrp = $mahasiswa->nrp;
            $i->nama = $mahasiswa->name;
            $i->judul = $judul->judul_penelitian;
            $i->tanggal_upload = Carbon::parse($i->created_at)->format('d-m-Y');
            $i->jenis_seminar = Kategori::where('id', $seminar->kategori_id)->first()->nama;
        }
        return view('kaprodi.revisi', ['revisi' => $revisi]);
    }

    public function publikasi()
    {
        $publikasi = Publikasi::all();
        foreach ($publikasi as $i) {
            $mahasiswa = User::where('id', $i->mahasiswa_id)->first();
            $judul = Judul::where('mahasiswa_id', $i->mahasiswa_id)->first();
            $i->nrp = $mahasiswa->nrp;
            $i->nama = $mahasiswa->name;
            $i->prodi = ProgramStudi::where('id', $mahasiswa->program_studi_id)->first()->nama;
            $i->judul_tesis = $judul->judul_penelitian;
            $i->dosen_pembimbing1 = $judul->dosen_pembimbing1;
            $i->dosen_pembimbing2 = $judul->dosen_pembimbing2;
            $i->dosen_pembimbing3 = $judul->dosen_pembimbing3;
        }
        return view('kaprodi.publikasi', ['publikasi' => $publikasi]);
    }

    public function judulSearch(Request $request)
    {
        $query = $request->input('query');

        $mahasiswa = User::where('nrp', 'LIKE', '%' . $query . '%')
            ->orWhere('name', 'LIKE', '%' . $query . '%')
            ->first();

        $judulQuery = Judul::where('judul_penelitian', 'LIKE', '%' . $query . '%')
            ->orWhere('dosen_pembimbing1', 'LIKE', '%' . $query . '%')
            ->orWhere('dosen_pembimbing2', 'LIKE', '%' . $query . '%')
            ->orWhere('dosen_pembimbing3', 'LIKE', '%' . $query . '%');

        if ($mahasiswa) {
            $judulQuery->orWhere('mahasiswa_id', $mahasiswa->id);
        }
        $judul = $judulQuery->get();

        foreach ($judul as $i) {
            $mahasiswa = User::where('id', $i->mahasiswa_id)->first();
            $i->nrp = $mahasiswa->nrp;
            $i->nama = $mahasiswa->name;
            $i->tanggal_upload = Carbon::parse($i->created_at)->format('d-m-Y');
            $i->prodi = ProgramStudi::where('id', $mahasiswa->program_studi_id)->first()->nama;
        }
        $count = count($judul);
        return view('kaprodi.judul-search', ['judul' => $judul, 'count' => $count]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query'); // Ambil kata kunci pencarian dari input

        // Query pencarian berdasarkan kolom yang relevan pada model Judul
        $results = Judul::where('nama', 'LIKE', '%' . $query . '%')
            ->orWhere('nrp', 'LIKE', '%' . $query . '%')
            ->orWhere('prodi', 'LIKE', '%' . $query . '%')
            ->orWhere('judul_penelitian', 'LIKE', '%' . $query . '%')
            ->get();

        // Kirim hasil pencarian ke view dalam bentuk HTML untuk diperbarui dengan jQuery
        return view('search.results', compact('results'));
    }
}
