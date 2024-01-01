<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Lokasi;
use App\Models\Kontributor;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jadwal = Jadwal::all();
        return view('frontend.home', ['jadwal' => $jadwal, 'tanggal' => "", 'kota' => ""]);
    }
    public function search(Request $request)
    {
        if ($request->kota == null) {
            $jadwal = Jadwal::where('tanggal', $request->tanggal)->get();
        } elseif ($request->tanggal == null) {
            // Filter kota dengan "LIKE"
            $jadwal = Jadwal::whereHas('lokasi', function ($query) use ($request) {
                $query->where('kota', 'LIKE', '%' . $request->kota . '%');
            })->get();
        } else {
            // Keduanya tanggal dan kota diisi
            $jadwal = Jadwal::where('tanggal', $request->tanggal)
                ->whereHas('lokasi', function ($query) use ($request) {
                    $query->where('kota', 'LIKE', '%' . $request->kota . '%');
                })
                ->get();
        }


        return view('frontend.home', ['jadwal' => $jadwal, 'tanggal' => $request->tanggal, "kota" => $request->kota]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
