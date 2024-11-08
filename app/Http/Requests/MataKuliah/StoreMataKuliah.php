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
            'pengajar' => 'required',
            'tgl_mulai' => 'required|date',
            'tgl_akhir' => 'required|date|after_or_equal:tgl_mulai',
            'desc' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Nama Mata Kuliah Wajib Diisi',
            'pengajar.required' => 'Pengajar Wajib Diisi',
            'tgl_mulai.required' => 'Tanggal mulai harus diisi.',
            'tgl_mulai.date' => 'Tanggal mulai harus berformat tanggal yang valid.',
            'tgl_akhir.required' => 'Tanggal akhir harus diisi.',
            'tgl_akhir.date' => 'Tanggal akhir harus berformat tanggal yang valid.',
            'tgl_akhir.after_or_equal' => 'Tanggal akhir harus lebih besar atau sama dengan tanggal mulai.',
            'desc.required' => 'Deskripsi Wajib diisi'
        ];
    }
}
