<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lokasi;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lokasi = Lokasi::all();
        return view('backend.lokasi.index', [
            'lokasi' =>  $lokasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama_lokasi' => 'required|min:3|max:100',
            'alamat' => 'required|min:5|max:100',
            'kota' => 'required|min:3|max:100',
        ]);
        // mengirim data ke model
        Lokasi::create($validated);
        return redirect('/dashboard/lokasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $lokasi = Lokasi::find($id);
        return view('backend.lokasi.show', [
            'lokasi' => $lokasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $lokasi = Lokasi::find($id);
        return view('backend.lokasi.edit', [
            'lokasi' => $lokasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $lokasi = Lokasi::find($id);
        $validated = $request->validate([
            'nama_lokasi' => 'required|min:3|max:100',
            'alamat' => 'required|min:5|max:100',
            'kota' => 'required|min:3|max:100',
        ]);

        $lokasi->update($validated);
        return redirect('/dashboard/lokasi')->with('success', 'Data berhasil di edit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // mencari data berdasarkan id
        $lokasi = Lokasi::find($id);
        $lokasi->delete();
        return redirect('/dashboard/lokasi');
    }
}
