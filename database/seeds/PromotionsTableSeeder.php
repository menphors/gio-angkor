<?php

use Illuminate\Database\Seeder;
use App\Promotion;

class PromotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed promotion if user assign to each product
        $pm1 = Promotion::create([
            'promotion_name'=> 'Happy Merry Christmax and Happy New Year',
            'promotion_prices' => "10",
            'promotion_image' => "",
            "discount_percentage" => "10",
            "date_from" => "2017/12/25",
            "date_to" => "2018/01/01",
            'brand_id' => 1,
            "published" => 1,
        ]);

        $pm2 = Promotion::create([
            'promotion_name'=> 'Happy Chiness New Year',
            'promotion_prices' => "10",
            'promotion_image' => "",
            "discount_percentage" => "10",
            "date_from" => "2018/02/14",
            "date_to" => "2018/02/25",
            'brand_id' => 1,
            "published" => 1,
        ]);

        $pm3 = Promotion::create([
            'promotion_name'=> 'Happy Khmer New Year',
            'promotion_prices' => "10",
            'promotion_image' => "",
            "discount_percentage" => "10",
            "date_from" => "2018/04/14",
            "date_to" => "2018/04/17",
            'brand_id' => 1,
            "published" => 1,
        ]);

        $pm3 = Promotion::create([
            'promotion_name'=> 'Happy Phchum Ben Day',
            'promotion_prices' => "10",
            'promotion_image' => "",
            "discount_percentage" => "10",
            "date_from" => "2018/09/10",
            "date_to" => "2018/09/20",
            'brand_id' => 1,
            "published" => 1,
        ]);

        $pm3 = Promotion::create([
            'promotion_name'=> 'Happy Water Festival',
            'promotion_prices' => "10",
            'promotion_image' => "",
            "discount_percentage" => "10",
            "date_from" => "2018/11/12",
            "date_to" => "2018/11/14",
            'brand_id' => 1,
            "published" => 1,
        ]);
    }
}
