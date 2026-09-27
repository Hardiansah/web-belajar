<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.tambah_kategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ket_kategori' => 'required|string|max:30',
        ], [
            'ket_kategori.required' => 'Nama / Keterangan kategori wajib diisi.',
            'ket_kategori.max' => 'Kategori maksimal 30 karakter.',
        ]);

        kategori::create([
            'ket_kategori' => $request->ket_kategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = kategori::findOrFail($id);
        return view('kategori.detail_kategori', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = kategori::findOrFail($id);
        return view('kategori.edit_kategori', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'ket_kategori' => 'required|string|max:30',
        ], [
            'ket_kategori.required' => 'Nama / Keterangan kategori wajib diisi.',
            'ket_kategori.max' => 'Kategori maksimal 30 karakter.',
        ]);

        $kategori = kategori::findOrFail($id);
        $kategori->update([
            'ket_kategori' => $request->ket_kategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus!');
    }
}
