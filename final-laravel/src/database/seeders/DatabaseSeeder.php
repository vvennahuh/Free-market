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
        $this->call(FavoritesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
        $this->call(Category_itemsTableSeeder::class);// \App\Models\User::factory(10)->create();
    }
}
