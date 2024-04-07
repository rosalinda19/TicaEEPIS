<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJudulRequest;
use App\Http\Requests\UpdateJudulRequest;
use App\Models\Judul;

class JudulController extends Controller
{
    public function index()
    {
        $data = Judul::all();
        return view('judul.index', compact('data'));
    }

    public function create()
    {
        return view('judul.create');
    }

    public function store(StoreJudulRequest $request)
    {
        $data = $request->all();
        Judul::create($data);
        return redirect()->route('judul.index');
    }

    public function edit(Judul $judul)
    {
        return view('judul.edit', compact('judul'));
    }

    public function update(UpdateJudulRequest $request, Judul $judul)
    {
        $data = $request->all();
        $judul->update($data);
        return redirect()->route('judul.index');
    }

    public function destroy(Judul $judul)
    {
        $judul->delete();
        return redirect()->route('judul.index');
    }
}
