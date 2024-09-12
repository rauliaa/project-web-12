<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'password' => bcrypt('password')
        ]);
    }
}