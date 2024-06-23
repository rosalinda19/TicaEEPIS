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
        return view('kaprodi.publikasi', ['publikasi' => $publikasi]);
    }
}
