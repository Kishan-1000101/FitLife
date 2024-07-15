<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationsTableSeeder extends Seeder
{
    public function run()
    {
        Notification::create([
            'user_id' => 1,
            'title' => 'Welcome to FitLife',
            'message' => 'Thank you for joining FitLife! Start your fitness journey today.',
            'read_at' => null,
        ]);

        Notification::create([
            'user_id' => 2,
            'title' => 'New Workout Plan Available',
            'message' => 'Check out your new personalized workout plan.',
            'read_at' => now(),
        ]);
    }
}
