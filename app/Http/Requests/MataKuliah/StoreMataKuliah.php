<?php

namespace App\Http\Requests\MataKuliah;

use Illuminate\Foundation\Http\FormRequest;

class StoreMataKuliah extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            'email' => 'required|uniques:users|email',
            'role' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Nama Lengkap Wajib Diisi',
            'tgl_lahir.required' => 'Tanggal Lahir Wajib Diisi',
            'nohp.required' => 'No Handphone Wajib Diisi',
            'email.required' => 'Email Wajib Diisi'
        ];
    }
}
