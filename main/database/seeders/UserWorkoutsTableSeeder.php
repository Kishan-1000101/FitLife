<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserWorkout;

class UserWorkoutsTableSeeder extends Seeder
{
    public function run()
    {
        UserWorkout::create([
            'user_id' => 1,
            'workout_plan_id' => 1,
            'completed_at' => now(),
        ]);

        UserWorkout::create([
            'user_id' => 2,
            'workout_plan_id' => 2,
            'completed_at' => null,
        ]);
    }
}
