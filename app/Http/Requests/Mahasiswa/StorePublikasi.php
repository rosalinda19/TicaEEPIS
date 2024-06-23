<?php

namespace App\Http\Requests\Mahasiswa;

use Illuminate\Foundation\Http\FormRequest;

class StorePublikasi extends FormRequest
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
            'judul' => ['required', 'string', 'max:255'],
            'urutan_penulis' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'jenis_jurnal' => ['required', 'string', 'max:255'],
            'nama_jurnal' => ['required', 'string', 'max:255'],
            'volume_dan_nomor' => ['required', 'string', 'max:255'],
            'halaman' => ['required', 'string', 'max:255'],
            'tahun' => ['required', 'string', 'max:255'],
            'link_dokumen' => ['required', 'string', 'max:255'],
            'judul_seminar' => ['required', 'string', 'max:255'],
            'urutan_penulis_seminar' => ['required', 'string', 'max:255'],
            'status_seminar' => ['required', 'string', 'max:255'],
            'jenis_seminar' => ['required', 'string', 'max:255'],
            'nama_seminar' => ['required', 'string', 'max:255'],
            'penyelenggara' => ['required', 'string', 'max:255'],
            'tahun_seminar' => ['required', 'string', 'max:255'],
            'link_dokumen_seminar' => ['required', 'string', 'max:255']
        ];
    }
}
