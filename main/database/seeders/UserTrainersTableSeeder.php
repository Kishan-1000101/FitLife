<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserTrainer;

class UserTrainersTableSeeder extends Seeder
{
    public function run()
    {
        UserTrainer::create([
            'user_id' => 1,
            'trainer_id' => 1,
            'start_date' => now(),
            'end_date' => null,
        ]);

        UserTrainer::create([
            'user_id' => 2,
            'trainer_id' => 2,
            'start_date' => now(),
            'end_date' => null,
        ]);
    }
}
