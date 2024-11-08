<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsers extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'tgl_lahir' => 'required',
            'nohp' => 'required',
            'email' => 'required|unique:users|email',
            'username' => 'required',
            'alamat' => 'required',
            'role' => 'required',
            'password' => 'required',
            'prodi' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Nama Lengkap Wajib Diisi',
            'tgl_lahir.required' => 'Tanggal Lahir Wajib Diisi',
            'nohp.required' => 'No Handphone Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.uniques' => 'Email Sudah Terdaftar',
            'username.required' => 'Username Wajid Diisi',
            'role.required' => 'Mendaftar Sebagai Wajib Diisi',
            'password.required' => 'Password Wajib diisi',
            'prodi.required' => 'Program Studi Wajib diisi'
        ];
    }
}
