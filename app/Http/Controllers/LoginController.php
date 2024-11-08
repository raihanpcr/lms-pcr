<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ValidateLoginRequest;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function validateLogin(ValidateLoginRequest $request){

        $user = User::where('username', $request->username)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                   
                return redirect('home');
            }else {
                return back()->withErrors(['status' => 'Password atau username tidak valid.']);
            }
        }else {
            dd('Login gagal');
        }

        dd($request->all());
    }

    public function logout(Request $request){
        Auth::logout();
        
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
