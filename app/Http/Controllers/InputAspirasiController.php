<?php

namespace App\Http\Controllers;
use App\Models\input_aspirasi;
use Illuminate\Http\Request;

class InputAspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aspirasi = input_aspirasi::all();
        return view('aspirasi.index', compact('aspirasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aspirasi.tambah_aspirasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        input_aspirasi::create([
            'nis' => $request->nis,
            'id_kategori' => $request->id_kategori,
            'lokasi' => $request->lokasi,
            'ket' => $request->ket,
        ]);
        return redirect('/aspirasi')->with('success', 'Aspirasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aspirasi = input_aspirasi::find($id);
        return view('aspirasi.detail_aspirasi', compact('aspirasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
