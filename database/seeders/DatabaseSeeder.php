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
        // User::factory(10)->create();

        User::create([
            'name' => 'Ilhan Haffiyan Juldan',
            'email' => 'ilhanzuldan11@gmail.com',
            'password' => bcrypt('123123123'),
        ]);

        Jurusan::factory(5)->create();
        CalonMahasiswa::factory(5)->create();

    }
}
