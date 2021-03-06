<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductsTableSeeder::class);
        $this->call(SettingTypesTableSeeder::class);
        $this->call(SettingItemsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);  
    }
}
