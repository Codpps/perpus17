<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = buku::latest()->paginate(10);
        return view('admin.buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'cover' => 'required|mimes:png,jpg,jpeg|max:2048',
            'nama' => 'required|min:5',
            'deskripsi' => 'required|min:10',
            'no_buku' => 'required',
            'pengarang' => 'required|min:5',
            'isi' => 'required|min:20',
            'penerbit' => 'required',
            'kategori' => 'required'
        ]);

        $coverPath = $request->file('cover')->store('cover', 'public');


        // Save the book data
        Buku::create([
            'cover' => basename($coverPath), // Save only the file name
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'no_buku' => $request->no_buku,
            'pengarang' => $request->pengarang,
            'isi' => $request->isi,
            'penerbit' => $request->penerbit,
            'kategori' => $request->kategori
        ]);

        return redirect()->route('buku.index')->with('success', 'Book successfully added!');
    }


    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        $bukus = buku::latest()->paginate(10);
        return view('koleksi', compact('bukus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bukus = buku::findOrFail($id);
        return view('admin.buku.edit', compact('bukus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku $buku)
    {
        $request->validate([
            'cover' => 'required|mimes:png,jpg,jpeg|max:2048',
            'nama' => 'required|min:5',
            'deskripsi' => 'required|min:10',
            'no_buku' => 'required',
            'pengarang' => 'required|min:5',
            'isi' => 'required|min:20',
            'penerbit' => 'required',
            'kategori' => 'required'
        ]);


        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('cover', 'public');

            Storage::delete('storage/cover/', $buku->cover);

            $buku->update([
                'cover' => basename($coverPath), // Save only the file name
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'no_buku' => $request->no_buku,
                'pengarang' => $request->pengarang,
                'isi' => $request->isi,
                'penerbit' => $request->penerbit,
                'kategori' => $request->kategori
            ]);
        } else {
            $buku->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'no_buku' => $request->no_buku,
                'pengarang' => $request->pengarang,
                'isi' => $request->isi,
                'penerbit' => $request->penerbit,
                'kategori' => $request->kategori
            ]);
        }
        return redirect()->route('buku.index')->with('success', 'Book successfully added!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'User deleted successfully.');
    }

    public function baca(string $id)
    {
        $buku = Buku::findOrFail($id);
        return view('baca', compact('buku'));
    }
}
