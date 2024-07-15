<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DietMeal;

class DietMealsTableSeeder extends Seeder
{
    public function run()
    {
        DietMeal::create([
            'diet_id' => 1,
            'meal_id' => 1,
        ]);

        DietMeal::create([
            'diet_id' => 1,
            'meal_id' => 2,
        ]);

        DietMeal::create([
            'diet_id' => 2,
            'meal_id' => 3,
        ]);

        DietMeal::create([
            'diet_id' => 2,
            'meal_id' => 4,
        ]);
    }
}
