<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WorkoutPlan;

class WorkoutPlansTableSeeder extends Seeder
{
    public function run()
    {
        WorkoutPlan::create([
            'title' => 'Beginner Workout Plan',
            'description' => 'A basic workout plan for beginners.',
            'fitness_goal' => 'Lose Weight'
        ]);

        WorkoutPlan::create([
            'title' => 'Advanced Muscle Building Plan',
            'description' => 'An advanced workout plan for building muscle.',
            'fitness_goal' => 'Build Muscle'
        ]);

        WorkoutPlan::create([
            'title' => 'Cardio Blast',
            'description' => 'A high-intensity cardio workout plan.',
            'fitness_goal' => 'Improve Endurance'
        ]);

        WorkoutPlan::create([
            'title' => 'Strength Training 101',
            'description' => 'A beginner strength training workout plan.',
            'fitness_goal' => 'Increase Strength'
        ]);
    }
}
