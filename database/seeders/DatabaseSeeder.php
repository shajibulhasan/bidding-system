<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'Shajibul Hasan Soaib',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'phone' => '01571171044',
            'password' => '12345',
        ]);
    }
}
