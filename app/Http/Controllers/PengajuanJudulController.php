<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePengajuanJudulRequest;
use App\Http\Requests\UpdatePengajuanJudulRequest;
use App\Models\PengajuanJudul;

class PengajuanJudulController extends Controller
{
    public function index()
    {
        return view();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePengajuanJudulRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PengajuanJudul $pengajuanJudul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengajuanJudul $pengajuanJudul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengajuanJudulRequest $request, PengajuanJudul $pengajuanJudul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PengajuanJudul $pengajuanJudul)
    {
        //
    }
}
