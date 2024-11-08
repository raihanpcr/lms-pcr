<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UpdateUsers;
use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){

        $mahasiswa = User::where('role', 'mahasiswa')->get();

        return view('pengguna.mahasiswa.index', compact('mahasiswa'));
    }

    public function show(string $id){

        $mahasiswa = User::findOrFail($id);

        return view('pengguna.mahasiswa.detail', compact('mahasiswa'));
    }

    public function edit(string $id){

        $mahasiswa = User::findOrFail($id);

        return view('pengguna.mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(UpdateUsers $request, string $id){
        
        $mahasiswa = User::findOrFail($id);

        $mahasiswa->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('nohp'),
            'alamat' => $request->input('alamat'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'username' => $request->input('username'),
            'prodi' => $request->input('prodi'),
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa Berhasil Diubah');
    }

    public function destroy(string $id){

        $mahasiswa = User::findOrFail($id);

        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa Berhasil di Hapus');

    }
}
