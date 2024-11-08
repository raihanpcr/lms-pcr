<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Users\UpdateDosenRequest;


class DosenController extends Controller
{
    public function index(){
        
        $dosen = User::where('role', 'dosen')->get();

        return view('pengguna.dosen.index', compact('dosen'));

    }

    public function show(string $id){

        $dosen = User::findOrFail($id);

        return view('pengguna.dosen.detail', compact('dosen'));
    }

    public function edit(string $id){

        $dosen = User::findOrFail($id);

        return view('pengguna.dosen.edit', compact('dosen'));

    }

    public function update(UpdateDosenRequest $request, string $id){
        
        $dosen = User::findOrFail($id);

        $dosen->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('nohp'),
            'alamat' => $request->input('alamat'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'username' => $request->input('username'),
            'prodi' => $request->input('prodi'),
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data Dosen Berhasil Diubah');
    }

    public function destroy(string $id){

        $dosen = User::findOrFail($id);

        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data Dosen Berhasil di Hapus');
    }
}
