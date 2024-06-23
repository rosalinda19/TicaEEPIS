<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    use HasFactory;

    protected $table = 'publikasis';

    protected $fillable = [
        'mahasiswa_id',
        'judul',
        'urutan_penulis',
        'status',
        'jenis_jurnal',
        'nama_jurnal',
        'volume_dan_nomor',
        'halaman',
        'tahun',
        'link_dokumen',
        'judul_seminar',
        'urutan_penulis_seminar',
        'status_seminar',
        'jenis_seminar',
        'nama_seminar',
        'penyelenggara',
        'tahun_seminar',
        'link_dokumen_seminar',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id');
    }
}
