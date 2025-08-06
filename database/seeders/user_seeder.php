<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    user::insert([
        [
            'name' => 'John Doe',
            'email' => 'John@gmail.com',
            'password' => bcrypt('password123'),
        ],
        [
            'name' => 'Jane Smith',
            'email' => 'Jane@gmail.com',
            'password' => bcrypt('password456'),
        ]
    ]);
}
}