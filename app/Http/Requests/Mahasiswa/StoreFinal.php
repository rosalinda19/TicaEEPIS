<?php

namespace App\Http\Requests\Mahasiswa;

use Illuminate\Foundation\Http\FormRequest;

class StoreFinal extends FormRequest
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
            'laporan' => 'required',
            'penerima_naskah' => 'required',
            'seminar_tesis' => 'required',
            'lembar_monitoring' => 'required',
            'ppt' => 'required',
            'video_demo' => 'required',
        ];
    }
}
