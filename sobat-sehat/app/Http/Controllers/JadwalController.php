<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jadwal = Jadwal::all();
        return view('backend.jadwal.index', [
            'jadwal' =>  $jadwal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama_jadwal' => 'required|min:3|max:100',
            'penyelenggara' => 'required|min:5|max:100',
            'tanggal' => 'required|date',
            'lokasi' => 'required|min:3|max:100',
            'kota' => 'required|min:3|max:50',


        ]);
        // mengirim data ke model
        Jadwal::create($validated);
        return redirect('/dashboard/jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $jadwal = Jadwal::find($id);
        return view('backend.jadwal.show', [
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $jadwal = Jadwal::find($id);
        return view('backend.jadwal.edit', [
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $jadwal = Jadwal::find($id);
        $validated = $request->validate([
            'nama_jadwal' => 'required|min:3|max:100',
            'penyelenggara' => 'required|min:5|max:100',
            'tanggal' => 'required|date',
            'lokasi' => 'required|min:3|max:100',
            'kota' => 'required|min:3|max:50',


        ]);

        $jadwal->update($validated);
        return redirect('/dashboard/jadwal')->with('success', 'Data berhasil di edit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // mencari data berdasarkan id
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect('/dashboard/jadwal');
    }
}
