<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FinancialRecord;

class FinancialRecordsTableSeeder extends Seeder
{
    public function run()
    {
        FinancialRecord::create([
            'user_id' => 1,
            'amount' => 99.99,
            'transaction_date' => now(),
            'description' => 'Monthly subscription'
        ]);

        FinancialRecord::create([
            'user_id' => 2,
            'amount' => 49.99,
            'transaction_date' => now(),
            'description' => 'Personal training session'
        ]);
    }
}
