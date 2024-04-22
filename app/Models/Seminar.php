<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;

    protected $table = 'seminars';

    protected $fillable = [
        'judul_id',
        'kategori_id',
        'laporan',
        'penerima_naskah',
        'seminar_tesis',
        'lembar_monitoring',
        'video_demo',
        'ppt',
    ];

    public function judul()
    {
        return $this->belongsTo(Judul::class, 'judul_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function revisi()
    {
        return $this->hasOne(Revisi::class, 'seminar_id');
    }
}
