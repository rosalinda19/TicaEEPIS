<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = User::create([
            'name' => 'mhs test',
            'email' => 'mhs@tica.id',
            'password' => bcrypt('mhs'),
        ]);
        $mahasiswa->assignRole('mahasiswa');
        $dosen = User::create([
            'name' => 'dosen test',
            'email' => 'dsn@tica.id',
            'password' => bcrypt('dsn'),
        ]);
        $dosen->assignRole('dosen');
    }
}
