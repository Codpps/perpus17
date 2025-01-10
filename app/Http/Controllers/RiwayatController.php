<?php

namespace App\Http\Controllers;

use App\Models\riwayat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayat = Riwayat::with('user')->latest()->paginate(10);
        return view('admin.riwayat.index', compact('riwayat'));
    }


    public function create()
    {
        $riwayat = \App\Models\Riwayat::where('user_id', Auth::id())->get();
        return view('form', compact('riwayat'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // Validate the input data
        $request->validate([


            'judul_buku' => 'required|string|max:255',
            'nomor_buku' => 'required|string|max:255',
            'penerbit'   => 'required|string|max:255',
        ]);

        // Create a new borrowing record
        Riwayat::create([
            'user_id'    => Auth::id(),
            'judul_buku' => $request->judul_buku,
            'nomor_buku' => $request->nomor_buku,
            'penerbit'   => $request->penerbit,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data peminjaman berhasil disimpan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(riwayat $riwayat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(riwayat $riwayat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, riwayat $riwayat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Riwayat $riwayat)
    {
        $riwayat->delete();

        return redirect()->route('riwayat.index')->with('success', 'Record deleted successfully.');
    }
}
