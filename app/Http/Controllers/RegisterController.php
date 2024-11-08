<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\MataKuliah\StoreMataKuliah;
use App\Http\Requests\Users\StoreUsers;
use App\Models\ProgramStudi;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programStudi = ProgramStudi::get();

        return view('auth.register', compact('programStudi'));
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
    public function store(StoreUsers $request)
    {

        $nip_nim = ($request->input('role') == 'mahasiswa' ? "02" : "01") . str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('nohp'),
            'role' => $request->input('role'),
            'password' => Hash::make($request->input('password')),
            'username' => $request->input('username'),
            'nip_nim' => $nip_nim,
            'alamat' => $request->input('alamat'),
            'prodi' => $request->input('prodi'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'is_active' => 0
        ]);

        session(['user_id' => $user->id]);

        $user->sendEmailVerificationNotification();

        return redirect()->route('verification.notice');
    }

    public function sendVerfikasiEmail(){
        return view('auth.verify-email');
    }
    public function VerifikasiEmail(Request $request)
    {
        // Memastikan permintaan memiliki tanda tangan yang valid
        if (!$request->hasValidSignature()) {
            return redirect()->route('login')->with('error', 'Link verifikasi tidak valid atau telah kedaluwarsa.');
        }

        // Memastikan user sudah terautentikasi
        $user = $request->user();

        if ($user) {
            // Memperbarui status dan waktu verifikasi email pengguna
            $user->update([
                'is_active' => 1,
                'email_verified_at' => now(),
            ]);

            // Menghapus user_id dari session
            session()->forget('user_id');

            return redirect()->route('login')->with('success', 'Email berhasil diverifikasi. Silakan login.');
        }

        return redirect()->route('login')->with('error', 'User tidak ditemukan.');
    }

    // public function VerifikasiEmail(Request $request){

    //     if ($request->user() && $request->hasValidSignature()) {

    //         $request->fulfill();

    //         $request->hasValidSignature();
    
    //         $userId = session('user_id');
    
    //         $user = User::find($userId);

    //         if ($user) {
                
    //             $user->update([
    //                 'is_active' => 1,
    //                 'email_verified_at' => now()
    //             ]);

    //             session()->forget('user_id');

    //             return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    //         }
    //     }

    //     return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');

    // }

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
