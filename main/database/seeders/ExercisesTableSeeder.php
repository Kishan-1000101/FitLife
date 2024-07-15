<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExercisesTableSeeder extends Seeder
{
    public function run()
    {
        Exercise::create([
            'name' => 'Push-up',
            'description' => 'A basic upper body strength exercise.',
            'category' => 'Strength'
        ]);

        Exercise::create([
            'name' => 'Running',
            'description' => 'A basic cardiovascular exercise.',
            'category' => 'Cardio'
        ]);

        Exercise::create([
            'name' => 'Squat',
            'description' => 'A lower body strength exercise.',
            'category' => 'Strength'
        ]);

        Exercise::create([
            'name' => 'Cycling',
            'description' => 'A cardiovascular exercise using a stationary bike.',
            'category' => 'Cardio'
        ]);
    }
}
