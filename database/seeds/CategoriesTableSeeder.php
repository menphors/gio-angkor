<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $p1 = Category::create([
        //     'name'=> 'Clothes',
        //     'parent_id' => 1,
        //     'published' => 1
        // ]);

        // $p2 = Category::create([
        //     'name'=> 'Phone',
        //     'parent_id' => 1,
        //     'published' => 1
        // ]);

        // $p3 = Category::create([
        //     'name'=> 'Watch',
        //     'parent_id' => 1,
        //     'published' => 1
        // ]);

        // $c1 = Category::create([
        //     'name'=> 'Men Clothes',
        //     'parent_id' => $p1->id,
        //     'published' => 1
        // ]);

        $c1 = Category::create([
            'name'=> 'Men Clothes',
            'parent_id' => 1,
            'published' => 1
        ]);

        $c2 = Category::create([
            'name'=> "Women's Clothing",
            'parent_id' => 1,
            'published' => 1
        ]);

        $c3 = Category::create([
            'name'=> "Man's Clothing",
            'parent_id' => 1,
            'published' => 1
        ]);

        $c4 = Category::create([
            'name'=> 'Phone & Accessories',
            'parent_id' => 1,
            'published' => 1
        ]);

        $c5 = Category::create([
            'name'=> 'Computer & Office',
            'parent_id' => 1,
            'published' => 1
        ]);

        $c6 = Category::create([
            'name'=> 'Consumer Electonics',
            'parent_id' => 1,
            'published' => 1
        ]);

        $c7 = Category::create([
            'name'=> 'Jewelry&Watches',
            'parent_id' => 1,
            'published' => 1
        ]);

        $c8 = Category::create([
            'name'=> 'Home & Garden,Furniture',
            'parent_id' => 1,
            'published' => 1
        ]);

        $c9 = Category::create([
            'name'=> 'Bags & Shoes',
            'parent_id' => 1,
            'published' => 1
        ]);

        $c10 = Category::create([
            'name'=> 'Toys, Kids & Baby',
            'parent_id' => 1,
            'published' => 1
        ]);

        $c10 = Category::create([
            'name'=> 'Sports & Outdoors',
            'parent_id' => 1,
            'published' => 1
        ]);

        $c11 = Category::create([
            'name'=> 'Health & Beauty, Hair',
            'parent_id' => 1,
            'published' => 1
        ]);

        $c12 = Category::create([
            'name'=> 'Automobiles & Motorcycles',
            'parent_id' => 1,
            'published' => 1
        ]);

        $c13 = Category::create([
            'name'=> 'Home Improvement',
            'parent_id' => 1,
            'published' => 1
        ]);

    }
}
