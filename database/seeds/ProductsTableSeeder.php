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
        	'name'=>"POST 1",
        	'desc'=>""

        	]);
        Product::create([
        	'name'=>"POST 2",
        	'desc'=>""

        	]);
        Product::create([
        	'name'=>"POST 3",
        	'desc'=>""

        	]);

    }
}
