<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ConditionsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(Sold_itemsTableSeeder::class);
        $this->call(Category_itemsTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(Shop_staffTableSeeder::class);
        $this->call(Shop_itemsTableSeeder::class);// \App\Models\User::factory(10)->create();
    }
}
