<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Workout;
use App\Models\Diet;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
        Workout::create(['name' => 'Cardio Workout', 'description' => '30 minutes of cardio exercises', 'fitness_goal' => 'weight_loss']);
        Workout::create(['name' => 'Strength Training', 'description' => '45 minutes of weight training', 'fitness_goal' => 'muscle_gain']);
        Workout::create(['name' => 'Balanced Workout', 'description' => '30 minutes of mixed exercises', 'fitness_goal' => 'maintain']);
    
        Diet::create(['name' => 'Low Carb Diet', 'description' => 'A diet plan low in carbohydrates', 'fitness_goal' => 'weight_loss']);
        Diet::create(['name' => 'High Protein Diet', 'description' => 'A diet plan high in protein', 'fitness_goal' => 'muscle_gain']);
        Diet::create(['name' => 'Balanced Diet', 'description' => 'A balanced diet plan', 'fitness_goal' => 'maintain']);
    
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
