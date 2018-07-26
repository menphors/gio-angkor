<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b1 = Brand::create([
            'brand_name'=> 'Samsung',
            'images_url' => "samsung-logo.jpeg",
            'official' => 1
        ]);

        $b2 = Brand::create([
            'brand_name'=> 'Apple',
            'images_url' => "apple.png",
            'official' => 1
        ]);
        
        $b3 = Brand::create([
            'brand_name'=> 'Romanson',
            'images_url' => "Romanson-Logo.jpg",
            'official' => 1
        ]);

    }
}
