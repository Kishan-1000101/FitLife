<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgressTracking;

class ProgressTrackingTableSeeder extends Seeder
{
    public function run()
    {
        ProgressTracking::create([
            'user_id' => 1,
            'date' => now(),
            'workout_completed' => true,
            'calories_consumed' => 2000,
            'weight' => 70.5,
        ]);

        ProgressTracking::create([
            'user_id' => 2,
            'date' => now(),
            'workout_completed' => false,
            'calories_consumed' => 1800,
            'weight' => 65.0,
        ]);
    }
}
