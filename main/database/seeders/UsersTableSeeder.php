<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'age' => 30,
            'weight' => 80,
            'height' => 175,
            'fitness_goal' => 'Lose Weight',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password'),
            'profile_picture' => null,
            'membership' => 'Basic'
        ]);

        User::create([
            'name' => 'Jane Smith',
            'age' => 25,
            'weight' => 65,
            'height' => 165,
            'fitness_goal' => 'Build Muscle',
            'email' => 'janesmith@example.com',
            'password' => Hash::make('password'),
            'profile_picture' => null,
            'membership' => 'Premium'
        ]);
    }
}

