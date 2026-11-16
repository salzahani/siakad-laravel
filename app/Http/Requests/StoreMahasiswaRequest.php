<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Mahasiswa;

class StoreMahasiswaRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nim' => 'required|string|size:' . Mahasiswa::PANJANG_NIM . '|unique:mahasiswa,nim',
            'nama' => 'required|string|min:3|max:100',
            'id_prodi' => 'required|exists:prodi,id_prodi',
            'required|exists:prodi,id_prodi',
            'email' => 'nullable|email|unique:mahasiswa,email',
        ];
    }
    public function messages(): array
    {
        return [
            'nim.required' => 'NIM wajib diisi.',
            'nim.size' => 'NIM harus tepat 7 karakter.',
            'nim.unique' => 'NIM sudah terdaftar.',
            'nama.min' => 'Nama minimal 3 karakter.',
        ];
    }
}
