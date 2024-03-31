<?php

namespace Database\Seeders;

use App\Models\ProgramStudi;
use Illuminate\Database\Seeder;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProgramStudi::create([
            'nama' => 'Teknik Informatika dan Komputer',
        ]);
        ProgramStudi::create([
            'nama' => 'Teknik Elektronika',
        ]);
    }
}
