<?php

namespace App\Http\Requests\Mahasiswa;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgress extends FormRequest
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
            'kategori_id' => 'required',
            'laporan' => 'required',
            'penerima_naskah' => 'required',
            'seminar_tesis' => 'required',
            'lembar_monitoring' => 'required',
            'video_demo' => 'required',
            'ppt' => 'required',
        ];
    }
}