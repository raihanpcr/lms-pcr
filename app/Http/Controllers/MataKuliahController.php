<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use App\Http\Requests\MataKuliah\StoreMataKuliah;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = MataKuliah::with('user')->get();
        return view('mata-kuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = User::where('role', 'dosen')->get();

        return view('mata-kuliah.create', compact('dosen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMataKuliah $request)
    {

        $kode = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 3) . substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 3);

        MataKuliah::create([
            'kode' => $kode,
            'name' => $request->input('name'),
            'user_id' => $request->input('pengajar'),
            'tgl_mulai' => $request->input('tgl_mulai'),
            'tgl_akhir' => $request->input('tgl_akhir'),
            'desc' => $request->input('desc')
        ]);
        
        return redirect()->route('matakuliah.index')->with('success', 'Data Mahasiswa Berhasil Diubah');
    }

    /**
     * Display the specified resource.
     */
    public function show(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MataKuliah $mataKuliah, string $id)
    {
        return view('mata-kuliah.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);

        $mataKuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Data Mahasiswa Berhasil Diubah');
    }
}
