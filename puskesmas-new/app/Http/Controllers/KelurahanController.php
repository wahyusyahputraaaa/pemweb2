<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;
use Illuminate\Auth\Events\Validated;

class KelurahanController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kelurahan = kelurahan::all();
        return view('admin.kelurahan.index', compact('list_kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kelurahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi from input
        $validated = $request->validate([
            'nama' => 'required|string',
            'kecamatan_nama' => 'required|string'
        ]);

        kelurahan::create($validated);
        return redirect('dashboard/kelurahan')->with('tambah', 'Data Berhasil Di Tambahkan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelurahan = kelurahan::find($id);
        return view('admin.kelurahan.show', compact('kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelurahan = Kelurahan::find($id);
        return view('admin.kelurahan.edit', compact('kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi from input
        $validated = $request->validate([
            'nama' => 'required|string',
            'kecamatan_nama' => 'required|string'
        ]);

        $kelurahan = Kelurahan::find($id);
        $kelurahan->update($validated);
        
        return redirect('dashboard/kelurahan')->with('update', 'Data Berhasil Di Perbarui');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelurahan = kelurahan::find($id);
        $kelurahan->delete();

        return redirect('dashboard/kelurahan')->with('pesan', 'Data Berhasil Di Hapus');
    }
}
