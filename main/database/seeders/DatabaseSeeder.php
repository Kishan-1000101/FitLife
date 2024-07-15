<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Workout;
use App\Models\Diet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            WorkoutPlansTableSeeder::class,
            ExercisesTableSeeder::class,
            DietPlansTableSeeder::class,
            MealsTableSeeder::class,
            TrainersTableSeeder::class,
            FinancialRecordsTableSeeder::class,
            UserWorkoutsTableSeeder::class,
            WorkoutExercisesTableSeeder::class,
            UserDietsTableSeeder::class,
            DietMealsTableSeeder::class,
            UserTrainersTableSeeder::class,
            ProgressTrackingTableSeeder::class,
            SubscriptionsTableSeeder::class,
            MessagesTableSeeder::class,
            AchievementsTableSeeder::class,
            NotificationsTableSeeder::class,
        ]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'wisdomkishan@gmail.com',
            'password' => 'wisdomkishan@gmail.com',
            'membership' => 'Platinum'
        ]);
    }
}
