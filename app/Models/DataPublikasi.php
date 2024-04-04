<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPublikasi extends Model
{
    use HasFactory;

    protected $table = 'data_publikasis';

    protected $fillable = [
        'mahasiswa_id',
        'tanggal',
        'berkas_publikasi',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id');
    }
}
