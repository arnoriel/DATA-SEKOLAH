<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
Use Alert;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view ('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);

        $siswa = new Siswa;
        $siswa->nim = $request->nim;
        $siswa->nama = $request->nama;
        $siswa->jurusan = $request->jurusan;
        $siswa->alamat = $request->alamat;
        $siswa->save();
        Alert::success('Sukses Menambah Siswa', 'Siswa Sudah Masuk Database');
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view ('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view ('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->nim = $request->nim;
        $siswa->nama = $request->nama;
        $siswa->jurusan = $request->jurusan;
        $siswa->alamat = $request->alamat;
        $siswa->save();
        Alert::info('Info Siswa Sudah Di Edit', 'Siswa sudah di Update di Database');
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        Alert::warning('Siswa Sudah di Hapus', 'Siswa sudah di DROP di Database');
        return redirect()->route('siswa.index');
    }
}
