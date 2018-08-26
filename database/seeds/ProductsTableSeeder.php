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
            'category_id'=>4,
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
            'category_id'=>4,
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
            'category_id'=>4,
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
            'category_id'=>4,
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
            'category_id'=>4,
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
            'category_id'=>4,
            'brand_id'=>2,
            'quantity'=>'5',
            'gallery'=>'iPhone6sPlus.jpg',
            'published'=>1,

            ]);
        Product::create([
            'pro_name'=>"Samsung Galaxy S8",
            'model'=>'Samsung',
            'product_desc'=>'Original Samsung Galaxy S8 SM-G950F 4G LTE Mobile phone 64GB 5.8 Inch Single Sim 12MP 3000mAh S-series Smartphone',
            'made'=>'Korea',
            'prices'=>'424',
            'category_id'=>4,
            'brand_id'=>1,
            'quantity'=>'5',
            'gallery'=>'galaxy-s8.jpg',
            'published'=>1,

        ]);
        Product::create([
            'pro_name'=>"iPhone X",
            'model'=>'Apple',
            'product_desc'=>'Original Unlocked Apple iPhone X 4G LTE Mobile phone 5.8\'\' 12.0MP 3G RAM 64G/256G ROM Face ID Cellphone',
            'made'=>'USA',
            'prices'=>'1267',
            'category_id'=>4,
            'brand_id'=>2,
            'quantity'=>'5',
            'gallery'=>'iphonex.jpg',
            'published'=>1,

        ]);
        Product::create([
            'pro_name'=>"OPPO R15",
            'model'=>'R15',
            'product_desc'=>'Global Rom OPPO R15 Mobile Phone 4G LTE Android 8.1 Helio P60 Octa Core 6.28" 19:9 OLED 6G+128G 20MP AI Camera Beautify VOOC',
            'made'=>'China',
            'prices'=>'420',
            'category_id'=>4,
            'brand_id'=>3,
            'quantity'=>'5',
            'gallery'=>'oppo-r15.jpg',
            'published'=>1,

        ]);
        Product::create([
            'pro_name'=>"Super BG",
            'model'=>'BG',
            'product_desc'=>'SuperB&G Winte Scarf Women Comfortable Lattice Triangle Wram Plaid Scarves Ladies Shawl Female Winter Thick Clothing Accessories',
            'made'=>'USA',
            'prices'=>'4.89',
            'category_id'=>2,
            'brand_id'=>3,
            'quantity'=>'5',
            'gallery'=>'SuperBG.png',
            'published'=>1,

        ]);
        Product::create([
            'pro_name'=>"T-Shirt Valencia FC",
            'model'=>'2018-2019',
            'product_desc'=>'2018 adults T-shirt Valencia shirt 18 19 men shirts Top Quality adult FUTBAL ZAZA Nani Gaya Kondogbia Parejo t-shirt',
            'made'=>'Spain',
            'prices'=>'17.89',
            'category_id'=>3,
            'brand_id'=>5,
            'quantity'=>'5',
            'gallery'=>'valencia.png',
            'published'=>1,

        ]);
        Product::create([
            'pro_name'=>"Apple Mac Pro 2017",
            'model'=>'2017',
            'product_desc'=>'2017 Original New Notebook Apple 13-Inch Macbook Pro touch bar Intel Core i5/i7 8G ram 512G ssd resolution 2560*1600 MPXV2ZP/A',
            'made'=>'USA',
            'prices'=>'1440',
            'category_id'=>5,
            'brand_id'=>2,
            'quantity'=>'5',
            'gallery'=>'macpro2017.jpg',
            'published'=>1,
        ]);
        Product::create([
            'pro_name'=>"Camera Flash Speedlite",
            'model'=>'A58',
            'product_desc'=>'VILTROX JY680A JY-680A Camera Flash Speedlite For Canon Nikon Pentax Sony A58 A6000 A3000 A7s A7 A6300 A7r A7r II DSLR Camera',
            'made'=>'USA',
            'prices'=>'29.85',
            'category_id'=>6,
            'brand_id'=>7,
            'quantity'=>'5',
            'gallery'=>'Camera-Flash-Speedlite.png',
            'published'=>1,
        ]);
        Product::create([
            'pro_name'=>"Led Digital Watch",
            'model'=>'Children Kid',
            'product_desc'=>'Fashion Men Led Digital Watch Women Casual Yoga Silicone Sports Wristwatch Children Kids Watches Outdoor Bracelet Watches Clock',
            'made'=>'USA',
            'prices'=>'1.85',
            'category_id'=>7,
            'brand_id'=>4,
            'quantity'=>'5',
            'gallery'=>'Led-Digital-Watch.png',
            'published'=>1,
        ]);
    }
}
