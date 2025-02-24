<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name' => '商品名',
            'price' => '470',
            'description' => "カラー：グレー\n\n新品商品の状態は良好です。\n傷もありません。\n\n購入後、即発送いたします。",
            'img_url' => '/img/dummy/.jpg',
            'user_id' => '1',
            'condition_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]); //

        Item::factory()->count(99)->create();
    }
}
