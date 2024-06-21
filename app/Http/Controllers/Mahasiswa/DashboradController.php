<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Judul;
use App\Models\Seminar;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function index()
    {
        $user_id =  auth()->user()->id;
        $judul = Judul::where('mahasiswa_id', $user_id)->first();
        if (!$judul) {
            $judul = "";
            $proposal = "";
            $tesis_1 = "";
            $tesis_2 = "";
            $final = "";
        } else {
            $proposal = Seminar::where('judul_id', $judul->id)->where('kategori_id', 2)->first();
            if (!$proposal) {
                $proposal = "";
            } else {
                $proposal->judul_penelitian = $judul->judul_penelitian;
            }
            $tesis_1 = Seminar::where('judul_id', $judul->id)->where('kategori_id', 2)->first();
            if (!$tesis_1) {
                $tesis_1 = "";
            } else {
                $tesis_1->judul_penelitian = $judul->judul_penelitian;
            }
            $tesis_2 = Seminar::where('judul_id', $judul->id)->where('kategori_id', 3)->first();
            if (!$tesis_2) {
                $tesis_2 = "";
            } else {
                $tesis_2->judul_penelitian = $judul->judul_penelitian;
            }
            $final = Seminar::where('judul_id', $judul->id)->where('kategori_id', 4)->first();
            if (!$final) {
                $final = "";
            } else {

                $final->judul_penelitian = $judul->judul_penelitian;
            }
        }
        return view('mahasiswa/dashboard', compact('judul', 'proposal', 'tesis_1', 'tesis_2', 'final'));
    }
}
