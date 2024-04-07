<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJudulRequest extends FormRequest
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
            'program_studi_id' => 'required',
            'judul_penelitian' => 'required',
            'tahun_angkatan' => 'required',
            'tahun_ajaran' => 'required',
            'semester' => 'required',
            'tanggal_upload' => 'required',
            'dosen_pembimbing1' => 'required',
            'dosen_pembimbing2' => 'required',
            'dosen_pembimbing3' => 'required',
        ];
    }
}
