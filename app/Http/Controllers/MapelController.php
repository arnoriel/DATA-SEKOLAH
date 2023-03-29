<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use Alert;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = Mapel::All();
        return view ('mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        $mapel = new Mapel;
        $mapel->nama = $request->nama;
        $mapel->save();
        Alert::success('Mata Pelajaran sudah di Tambah', 'Mata Pelajaran sudah masuk di Database');
        return redirect('/mapel');        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mapel = Mapel::findOrFail($id);
        return view ('mapel.show', compact('mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mapel = Mapel::findOrFail($id);
        return view ('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        $mapel = Mapel::findOrFail($id);
        $mapel->nama = $request->nama;
        $mapel->save();
        Alert::info('Info Mata Pelajaran sudah di Edit', 'Mata Pelajaran sudah di Update di Database');
        return redirect('/mapel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mapel = Mapel::findOrFail($id);
        $mapel->delete();
        Alert::danger('Mata Pelajaran sudah di Hapus', 'Mata Pelajaran sudah di DROP di Database');
        return redirect()->route('mapel.index');
    }
}
