<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'password' => 'password123'
            ],
            [
                'name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane.smith@example.com',
                'password' => 'securepass'
            ],
            [
                'name' => 'Michael',
                'last_name' => 'Johnson',
                'email' => 'michael.johnson@example.com',
                'password' => 'pass1234'
            ],
            [
                'name' => 'Emily',
                'last_name' => 'Williams',
                'email' => 'emily.williams@example.com',
                'password' => 'letmein'
            ],
            [
                'name' => 'James',
                'last_name' => 'Brown',
                'email' => 'james.brown@example.com',
                'password' => 'qwerty'
            ]
        ]);
    }
}
