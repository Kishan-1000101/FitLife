<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserDiet;

class UserDietsTableSeeder extends Seeder
{
    public function run()
    {
        UserDiet::create([
            'user_id' => 1,
            'diet_id' => 1,
            'start_date' => now(),
            'end_date' => null,
        ]);

        UserDiet::create([
            'user_id' => 2,
            'diet_id' => 2,
            'start_date' => now(),
            'end_date' => null,
        ]);
    }
}
