<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa; // <-- Ini yang bener bro!
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas',
            'jurusan' => 'required',
            'email' => 'required|email|unique:mahasiswas',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data Mahasiswa berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas,nim,' . $mahasiswa->id,
            'jurusan' => 'required',
            'email' => 'required|email|unique:mahasiswas,email,' . $mahasiswa->id,
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data Mahasiswa berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data Mahasiswa berhasil dihapus.');
    }
}
