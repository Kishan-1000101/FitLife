<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trainer;

class TrainersTableSeeder extends Seeder
{
    public function run()
    {
        Trainer::create([
            'name' => 'Alice Johnson',
            'specialization' => 'Strength Training',
            'contact' => 'alice@example.com'
        ]);

        Trainer::create([
            'name' => 'Bob Smith',
            'specialization' => 'Cardio Training',
            'contact' => 'bob@example.com'
        ]);

        Trainer::create([
            'name' => 'Charlie Davis',
            'specialization' => 'Flexibility Training',
            'contact' => 'charlie@example.com'
        ]);

        Trainer::create([
            'name' => 'Diana Lee',
            'specialization' => 'Nutrition',
            'contact' => 'diana@example.com'
        ]);
    }
}
