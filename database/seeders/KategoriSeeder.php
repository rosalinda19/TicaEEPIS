<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama' => 'proposal',
        ]);
        Kategori::create([
            'nama' => 'tesis 1',
        ]);
        Kategori::create([
            'nama' => 'tesis 2',
        ]);
        Kategori::create([
            'nama' => 'final tesis',
        ]);
    }
}
