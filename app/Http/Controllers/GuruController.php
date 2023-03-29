<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Alert;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::All();
        return view ('guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mapel=Mapel::all();
        return view ('guru.create', compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'mapel_id' => 'required',
            'telepon' => 'required',
        ]);
        
        $guru = new Guru;
        $guru->nama = $request->nama;
        $guru->mapel_id = $request->mapel_id;
        $guru->telepon = $request->telepon;
        $guru->save();
        Alert::success('Sukses Menambah Guru', 'Guru Sudah Masuk di Database');
        return redirect('/guru');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mapel=Mapel::all();
        $guru = Guru::findOrFail($id);
        return view ('guru.show', compact('guru', 'mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mapel = Mapel::all();
        $guru = Guru::findOrFail($id);
        return view ('guru.edit', compact('guru', 'mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'mapel_id' => 'required',
            'telepon' => 'required',
        ]);
        
        $guru = Guru::findOrFail($id);
        $guru->nama = $request->nama;
        $guru->mapel_id = $request->mapel_id;
        $guru->telepon = $request->telepon;
        $guru->save();
        Alert::info('Info Guru sudah di Edit', 'Guru sudah di Update di Database');
        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        Alert::danger('Guru sudah di Hapus', 'Guru sudah di DROP di Database');
        return redirect()->route('guru.index');
    }
}
