<?php

namespace App\Http\Controllers;

use App\Models\Fine;
use Illuminate\Http\Request;

class FineController extends Controller
{
    public function index()
    {
        $fines = Fine::all(); 
        return view('fines.index', compact('fines'));
    }

    public function create()
    {
        return view('fines.create');
    }

    public function store(Request $request)
    {
        // 1. Validasi Input (Poin 6 Tugas)
        $request->validate([
            'nama_peminjam' => 'required|min:3',
            'amount' => 'required|numeric',
            'reason' => 'required',
        ]);

        // 2. Simpan ke Database
        Fine::create($request->all());

        // 3. Redirect dengan Flash Message (Poin 7 Tugas)
        return redirect()->route('fines.index')->with('success', 'Data denda berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $fine = Fine::findOrFail($id);
        return view('fines.edit', compact('fine'));
    }

    public function update(Request $request, string $id)
    {
        // 1. Validasi
        $request->validate([
            'nama_peminjam' => 'required|min:3',
            'amount' => 'required|numeric',
            'reason' => 'required',
        ]);

        // 2. Cari data dulu, baru update
        $fine = Fine::findOrFail($id);
        $fine->update($request->all());

        return redirect()->route('fines.index')->with('success', 'Data denda berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        // Cari data dulu, baru hapus
        $fine = Fine::findOrFail($id);
        $fine->delete();

        return redirect()->route('fines.index')->with('success', 'Data denda berhasil dihapus!');
    }
}