<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judul extends Model
{
    use HasFactory;

    protected $table = 'juduls';

    protected $fillable = [
        'mahasiswa_id',
        'program_studi_id',
        'judul_penelitian',
        'tahun_angkatan',
        'tahun_ajaran',
        'semester',
        'tanggal_upload',
        'dosen_pembimbing1',
        'dosen_pembimbing2',
        'dosen_pembimbing3',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id');
    }

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_id');
    }
}
