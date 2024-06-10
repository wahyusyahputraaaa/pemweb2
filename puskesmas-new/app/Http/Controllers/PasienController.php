<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Kelurahan;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pasien = Pasien::all();
        return view ('admin.pasien.index', compact ('list_pasien'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelurahans = Kelurahan::all();
        return view('admin.pasien.create', compact('kelurahans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tgl_lahir' => 'required|date',
            'tmp_lahir' => 'required|string',
            'gender' => 'required|string|in:L,P',           
            'email' => 'required|email',
            'alamat' => 'required|string',
            'kel_nama' => 'required|string'
        ]);

        //menyimpan
        Pasien::create($validated);
        return redirect ('dashboard/pasien')->with('tambah', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = Pasien::find($id);
        return view ('admin.pasien.show', compact ('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = pasien::find($id);
        $kelurahans = kelurahan::all();
        return view('admin.pasien.edit', compact('kelurahans','pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tgl_lahir' => 'required|date',
            'tmp_lahir' => 'required|string',
            'gender' => 'required|string|in:L,P',           
            'email' => 'required|email',
            'alamat' => 'required|string',
            'kel_nama' => 'required|string'
        ]);

        $pasien = pasien::find($id);
        $pasien->update($validated);

        return redirect('dashboard/pasien')->with('update', 'Data Berhasil Di Perbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = pasien::find($id);
        $pasien->delete();
        
        return redirect('dashboard/pasien')->with('pesan', 'Data Berhasil Di Hapus');
    }
}