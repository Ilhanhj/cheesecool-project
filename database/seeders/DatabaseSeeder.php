<?php

namespace Database\Seeders;

use App\Models\CalonMahasiswa;
use App\Models\Jurusan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'The Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
        ]);

        CalonMahasiswa::factory(50)->create();
        User::factory(5)->create();

        Jurusan::create([
            'nama' => 'Teknik Informatika',
        ]);

        Jurusan::create([
            'nama' => 'Bisnis Internasional',
        ]);

        Jurusan::create([
            'nama' => 'Desain Grafis',
        ]);

        Jurusan::create([
            'nama' => 'Teknik Sipil',
        ]);

        Jurusan::create([
            'nama' => 'Ilmu Komunikasi',
        ]);

        Jurusan::create([
            'nama' => 'Teknik Elektro',
        ]);
    }
}
