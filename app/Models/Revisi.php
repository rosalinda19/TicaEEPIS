<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revisi extends Model
{
    use HasFactory;

    protected $table = 'revisis';

    protected $fillable = [
        'seminar_id',
        'file_revisi',
        'catatan',
    ];

    public function seminar()
    {
        return $this->belongsTo(Seminar::class, 'seminar_id');
    }
}
