<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Rafif Hikmatiar',
        //     'email' => 'rafif@test.com',
        //     'password' => Hash::make('password'),
        //     'role' => 'admin',
        // ]);

        for ($i = 0; $i < 10; $i++) {
            User::factory()->create();
        }
    }
}
