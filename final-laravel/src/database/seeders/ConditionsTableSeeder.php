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
            'condition' => '最高',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Condition::create([
            'condition' => '良い',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Condition::create([
            'condition' => '普通',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Condition::create([
            'condition' => '悪い',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Condition::create([
            'condition' => '最悪',
            'created_at' => now(),
            'updated_at' => now(),
        ]);//
    }
}
