<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = User::create([
            'nrp' => 3120600006,
            'name' => 'mhs test',
            'email' => 'mhs@tica.id',
            'password' => bcrypt('mhs'),
        ]);
        $mahasiswa->assignRole('mahasiswa');
        $dosen = User::create([
            'nrp' => 197107081999031901,
            'name' => 'dosen test',
            'email' => 'dsn@tica.id',
            'password' => bcrypt('dsn'),
        ]);
        $dosen->assignRole('dosen');
        $admin = User::create([
            'nrp' => 197107081999031902,
            'name' => 'admin test',
            'email' => 'adm@tica.id',
            'password' => bcrypt('adm'),
        ]);
        $admin->assignRole('admin');
    }
}
