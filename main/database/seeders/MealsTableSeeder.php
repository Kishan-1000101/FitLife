<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;

class MealsTableSeeder extends Seeder
{
    public function run()
    {
        Meal::create([
            'name' => 'Chicken Breast',
            'description' => 'Grilled chicken breast with spices.',
            'type' => 'Meal',
            'calories' => 200
        ]);

        Meal::create([
            'name' => 'Protein Shake',
            'description' => 'A high-protein shake.',
            'type' => 'Drink',
            'calories' => 150
        ]);

        Meal::create([
            'name' => 'Greek Salad',
            'description' => 'Salad with feta cheese, olives, and vegetables.',
            'type' => 'Meal',
            'calories' => 300
        ]);

        Meal::create([
            'name' => 'Fruit Smoothie',
            'description' => 'A refreshing fruit smoothie.',
            'type' => 'Drink',
            'calories' => 250
        ]);
    }
}
