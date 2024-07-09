<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Judul;
use App\Models\Kategori;
use App\Models\ProgramStudi;
use App\Models\Seminar;

class DashboradController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $judul = Judul::where('mahasiswa_id', $user_id)->first();
        if (!$judul) {
            $judul = '';
            $proposal = '';
            $tesis_1 = '';
            $tesis_2 = '';
            $final = '';
        } else {
            $proposal = Seminar::where('judul_id', $judul->id)->where('kategori_id', 1)->first();
            if (!$proposal) {
                $proposal = '';
            } else {
                $proposal->judul_penelitian = $judul->judul_penelitian;
            }
            $tesis_1 = Seminar::where('judul_id', $judul->id)->where('kategori_id', 2)->first();
            if (!$tesis_1) {
                $tesis_1 = '';
            } else {
                $tesis_1->judul_penelitian = $judul->judul_penelitian;
            }
            $tesis_2 = Seminar::where('judul_id', $judul->id)->where('kategori_id', 3)->first();
            if (!$tesis_2) {
                $tesis_2 = '';
            } else {
                $tesis_2->judul_penelitian = $judul->judul_penelitian;
            }
            $final = Seminar::where('judul_id', $judul->id)->where('kategori_id', 4)->first();
            if (!$final) {
                $final = '';
            } else {
                $final->judul_penelitian = $judul->judul_penelitian;
            }
        }

        return view('mahasiswa/dashboard', compact('judul', 'proposal', 'tesis_1', 'tesis_2', 'final'));
    }

    public function detail($id)
    {
        $user_id = auth()->user()->id;
        $judul = Judul::where('mahasiswa_id', $user_id)->first();
        if ($id == 1) {
            $proposal = Seminar::where('judul_id', $judul->id)->where('kategori_id', 1)->first();
            $proposal->nrp = auth()->user()->nrp;
            $proposal->nama = auth()->user()->name;
            $proposal->judul_penelitian = $judul->judul_penelitian;
            $judul = '';
        } else {
            $proposal = '';
        }
        if ($id == 2) {
            $tesis_1 = Seminar::where('judul_id', $judul->id)->where('kategori_id', 2)->first();
            $tesis_1->jenis_progress = Kategori::where('id', $tesis_1->kategori_id)->first()->nama;
            $tesis_1->nrp = auth()->user()->nrp;
            $tesis_1->nama = auth()->user()->name;
            $tesis_1->judul_penelitian = $judul->judul_penelitian;
            $judul = '';
        } else {
            $tesis_1 = '';
        }
        if ($id == 3) {
            $tesis_2 = Seminar::where('judul_id', $judul->id)->where('kategori_id', 3)->first();
            $tesis_2->jenis_progress = Kategori::where('id', $tesis_2->kategori_id)->first()->nama;
            $tesis_2->nrp = auth()->user()->nrp;
            $tesis_2->nama = auth()->user()->name;
            $tesis_2->judul_penelitian = $judul->judul_penelitian;
            $judul = '';
        } else {
            $tesis_2 = '';
        }
        if ($id == 4) {
            $final = Seminar::where('judul_id', $judul->id)->where('kategori_id', 4)->first();
            $final->nrp = auth()->user()->nrp;
            $final->nama = auth()->user()->name;
            $final->judul_penelitian = $judul->judul_penelitian;
            $judul = '';
        } else {
            $final = '';
        }
        if ($id == 5) {
            $proposal = '';
            $tesis_1 = '';
            $tesis_2 = '';
            $final = '';
            $judul->nrp = auth()->user()->nrp;
            $judul->nama = auth()->user()->name;
            $judul->prodi = ProgramStudi::where('id', auth()->user()->program_studi_id)->first()->nama;
            return view('mahasiswa/detail', compact('judul', 'proposal', 'tesis_1', 'tesis_2', 'final'));
        }
        return view('mahasiswa/detail', compact('judul', 'proposal', 'tesis_1', 'tesis_2', 'final'));
    }
}
