<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Condition;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Condition::create([
            'name' => '良好',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Condition::create([
            'name' => '目立った傷や汚れなし',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Condition::create([
            'name' => 'やや傷や汚れあり',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Condition::create([
            'name' => '悪い',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
