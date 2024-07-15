<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WorkoutExercise;

class WorkoutExercisesTableSeeder extends Seeder
{
    public function run()
    {
        WorkoutExercise::create([
            'workout_plan_id' => 1,
            'exercise_id' => 1,
        ]);

        WorkoutExercise::create([
            'workout_plan_id' => 1,
            'exercise_id' => 2,
        ]);

        WorkoutExercise::create([
            'workout_plan_id' => 2,
            'exercise_id' => 3,
        ]);

        WorkoutExercise::create([
            'workout_plan_id' => 2,
            'exercise_id' => 4,
        ]);
    }
}
