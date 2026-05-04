<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'vincenzo.caruso@aicoip.com',
            'password' => 'password',
            'admin' => true,
            'verified' => true,
        ]);
    }
}