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
        $p1 = Category::create([
            'name'=> 'Clothes',
            'parent_id' => 0,
            'ordering' => 1,
            'published' => 1
        ]);

        $p2 = Category::create([
            'name'=> 'Phone',
            'parent_id' => 0,
            'ordering' => 2,
            'published' => 1
        ]);

        $p3 = Category::create([
            'name'=> 'Watch',
            'parent_id' => 0,
            'ordering' => 3,
            'published' => 1
        ]);

        $c1 = Category::create([
            'name'=> 'Men Clothes',
            'parent_id' => $p1->id,
            'ordering' => 1,
            'published' => 1
        ]);

        $c2 = Category::create([
            'name'=> 'Women Clothes',
            'parent_id' => $p1->id,
            'ordering' => 2,
            'published' => 1
        ]);

        $c3 = Category::create([
            'name'=> 'Children Clothes',
            'parent_id' => $p1->id,
            'ordering' => 3,
            'published' => 1
        ]);

        $c4 = Category::create([
            'name'=> 'Men Watches',
            'parent_id' => $p3->id,
            'ordering' => 1,
            'published' => 1
        ]);

        $c5 = Category::create([
            'name'=> 'Women Watches',
            'parent_id' => $p3->id,
            'ordering' => 2,
            'published' => 1
        ]);

    }
}
