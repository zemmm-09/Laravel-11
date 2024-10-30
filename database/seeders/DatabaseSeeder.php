<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Maysura',
            'email' => 'sneakiddo_@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
