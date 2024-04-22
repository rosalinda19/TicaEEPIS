<?php

namespace App\Http\Requests\Mahasiswa;

use Illuminate\Foundation\Http\FormRequest;

class StorePengajuanJudul extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'judul_penelitian' => 'required|string',
            'tahun_angkatan' => 'required|string',
            'tahun_ajaran' => 'required|string',
            'semester' => 'required|integer',
            'tanggal' => 'required|date',
            'dosen_pembimbing1' => 'required|string',
            'dosen_pembimbing2' => 'nullable|string',
            'dosen_pembimbing3' => 'nullable|string',
        ];
    }
}
