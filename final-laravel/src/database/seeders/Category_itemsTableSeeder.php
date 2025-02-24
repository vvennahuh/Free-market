<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category_item;

class Category_itemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category_item::factory()->count(100)->create();//
    }
}
