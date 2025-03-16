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
            'name' => '最高',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Condition::create([
            'name' => '良い',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Condition::create([
            'name' => '普通',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Condition::create([
            'name' => '悪い',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Condition::create([
            'name' => '最悪',
            'created_at' => now(),
            'updated_at' => now(),
        ]);//
    }
}
