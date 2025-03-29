<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => '電子機器',
            'parent_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'メンズ',
            'parent_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'レディース',
            'parent_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => '鞄',
            'parent_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]); //

        Category::create([
            'name' => '食べ物',
            'parent_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'その他',
            'parent_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
