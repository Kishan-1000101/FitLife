<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementsTableSeeder extends Seeder
{
    public function run()
    {
        Achievement::create([
            'user_id' => 1,
            'title' => 'First Workout',
            'description' => 'Completed the first workout session.',
            'achieved_at' => now(),
        ]);

        Achievement::create([
            'user_id' => 2,
            'title' => 'Weight Loss Milestone',
            'description' => 'Lost 10 pounds in a month.',
            'achieved_at' => now(),
        ]);
    }
}
