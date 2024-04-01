<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $table = 'program_studis';

    protected $fillable = [
        'nama',
    ];

    public function judul()
    {
        return $this->hasMany(Judul::class, 'program_studi_id');
    }
}
