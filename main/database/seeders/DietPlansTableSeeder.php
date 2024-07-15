<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Diet;

class DietPlansTableSeeder extends Seeder
{
    public function run()
    {
        Diet::create([
            'name' => 'Keto Diet Plan',
            'description' => 'A low-carb, high-fat diet plan.',
            'fitness_goal' => 'Lose Weight'
        ]);

        Diet::create([
            'name' => 'High Protein Diet Plan',
            'description' => 'A diet plan focused on high protein intake.',
            'fitness_goal' => 'Build Muscle'
        ]);

        Diet::create([
            'name' => 'Vegan Diet Plan',
            'description' => 'A diet plan that excludes all animal products.',
            'fitness_goal' => 'Healthy Living'
        ]);

        Diet::create([
            'name' => 'Mediterranean Diet Plan',
            'description' => 'A diet plan based on the traditional foods of Mediterranean countries.',
            'fitness_goal' => 'Improve Heart Health'
        ]);
    }
}
