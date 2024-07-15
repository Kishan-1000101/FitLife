<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        Message::create([
            'sender_id' => 1,
            'receiver_id' => 2,
            'content' => 'Hey! How was your workout today?',
            'read_at' => null,
        ]);

        Message::create([
            'sender_id' => 2,
            'receiver_id' => 1,
            'content' => 'It was great! I felt really energized.',
            'read_at' => now(),
        ]);
    }
}
