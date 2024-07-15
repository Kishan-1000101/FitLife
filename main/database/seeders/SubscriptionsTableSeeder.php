<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;

class SubscriptionsTableSeeder extends Seeder
{
    public function run()
    {
        Subscription::create([
            'user_id' => 1,
            'plan_name' => 'Basic',
            'start_date' => now(),
            'end_date' => now()->addMonth(),
            'status' => 'active',
        ]);

        Subscription::create([
            'user_id' => 2,
            'plan_name' => 'Premium',
            'start_date' => now(),
            'end_date' => now()->addYear(),
            'status' => 'active',
        ]);
    }
}
