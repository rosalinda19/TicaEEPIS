<?php

namespace App\Http\Controllers;

use App\Http\Requests\JudulRequest;
use Illuminate\Http\Request;
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

    public function store(JudulRequest $request)
    {
        $data = $request->all();
        Judul::create($data);
        return redirect()->route('judul.index');
    }
}
