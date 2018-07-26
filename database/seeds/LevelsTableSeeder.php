<?php

use Illuminate\Database\Seeder;
use App\Level;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $l1 = Level::create([
            'level_name'=> 'Administrator',
            'level_slog' => "Admin",
            'remark' => "Be able to access all feature",
            'published' => 1,
        ]);

        $l2 = Level::create([
            'level_name'=> "Shop Manager",
            'level_slog' => "Owner",
            'remark' => "Be able to access for posting product",
            'published' => 1,
        ]);

        $l3 = Level::create([
            'level_name'=> "Vendor",
            'level_slog' => "seller",
            'remark' => "Be able to access for posting product and payment commission",
            'published' => 1,
        ]);

        $l4 = Level::create([
            'level_name'=> "Editor",
            'level_slog' => "author",
            'remark' => "post and edit product",
            'published' => 1,
        ]);
    }
}
