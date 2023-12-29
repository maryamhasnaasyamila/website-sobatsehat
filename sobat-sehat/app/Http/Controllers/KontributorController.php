<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontributor;

class KontributorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kontributor = Kontributor::all();
        return view('backend.kontributor.index', [
            'kontributor' =>  $kontributor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.kontributor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama_kontributor' => 'required|min:3|max:100',
            'username' => 'required|min:5|max:100',
            'password' => 'required|min:3|max:20',
            'email' => 'required|email',
        ]);
        // mengirim data ke model
        Kontributor::create($validated);
        return redirect('/dashboard/kontributor');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $kontributor = Kontributor::find($id);
        return view('backend.kontributor.show', [
            'kontributor' => $kontributor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    //     $kontributor = Kontributor::find($id);
    //     return view('backend.kontributor.edit', [
    //         'kontributor' => $kontributor
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    //     $kontributor = Kontributor::find($id);
    //     $validated = $request->validate([
    //         'nama_kontributor' => 'required|min:3|max:100',
    //         'username' => 'required|min:5|max:100',
    //         'password' => 'required|min:3|max:20',
    //         'email' => 'required|email',
    //     ]);

    //     $kontributor->update($validated);
    //     return redirect('/dashboard/kontributor')->with('success', 'Data berhasil di edit');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // mencari data berdasarkan id
        $kontributor = Kontributor::find($id);
        $kontributor->delete();
        return redirect('/dashboard/kontributor');
    }
}
