<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
        	'pro_name'=>"Samsung Galaxy A8 Star",
        	'pro_code'=>"S0001",
            'model'=>'Samsung',
            'product_desc'=>'Samsung Galaxy A8 Star new invention',
            'made'=>'South Korea',
            'prices'=>'525',
            'count_product'=>'5',
            'category_id'=>2,
            'brand_id'=>1,
            'quantity'=>'5',
            'gallery'=>'Samsung-Galaxy-A8-Star.jpg',
            'published'=>1,

        	]);
        Product::create([
            'pro_name'=>"Samsung Galaxy J8",
            'pro_code'=>"S0002",
            'model'=>'Samsung',
            'product_desc'=>'Samsung Galaxy J8 new update',
            'made'=>'South Korea',
            'prices'=>'289',
            'count_product'=>'5',
            'category_id'=>2,
            'brand_id'=>1,
            'quantity'=>'5',
            'gallery'=>'SamsungGalaxyJ8.jpg',
            'published'=>1,

            ]);
        Product::create([
            'pro_name'=>"Samsung Galaxy J4",
            'pro_code'=>"S0003",
            'model'=>'Samsung',
            'product_desc'=>'Samsung Galaxy J4 new Korean model',
            'made'=>'South Korea',
            'prices'=>'169',
            'count_product'=>'5',
            'category_id'=>2,
            'brand_id'=>1,
            'quantity'=>'5',
            'gallery'=>'SamsungGalaxyJ4.jpg',
            'published'=>1,

            ]);
        Product::create([
            'pro_name'=>"Samsung Galaxy J6",
            'pro_code'=>"S0004",
            'model'=>'Samsung',
            'product_desc'=>'Samsung Galaxy J6 more suitable price',
            'made'=>'South Korea',
            'prices'=>'199',
            'count_product'=>'5',
            'category_id'=>2,
            'brand_id'=>1,
            'quantity'=>'5',
            'gallery'=>'SamsungGalaxyJ6.jpg',
            'published'=>1,

            ]);
        Product::create([
            'pro_name'=>"Samsung Galaxy J2 Prime",
            'pro_code'=>"S0005",
            'model'=>'Samsung',
            'product_desc'=>'Samsung Galaxy J2 Prime new decoration',
            'made'=>'South Korea',
            'prices'=>'125',
            'count_product'=>'5',
            'quantity'=>'5',
            'category_id'=>2,
            'brand_id'=>1,
            'gallery'=>'SamsungGalaxyJ2Prime.jpg',
            'published'=>1,

            ]);
        Product::create([
            'pro_name'=>"iPhone 6s Plus",
            'pro_code'=>"I0001",
            'model'=>'Samsung',
            'product_desc'=>'iPhone 6s Plus Apple products',
            'made'=>'Canada',
            'prices'=>'440',
            'count_product'=>'5',
            'category_id'=>2,
            'brand_id'=>2,
            'quantity'=>'5',
            'gallery'=>'iPhone6sPlus.jpg',
            'published'=>1,

            ]);


    }
}
