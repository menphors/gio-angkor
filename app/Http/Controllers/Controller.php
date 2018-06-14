<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RequestStack;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(RequestStack $req){

        $brand_name = $req->input('brand_name');
        $promotion_name = $req->input('promotion_name');
        $promotion_prices = $req->input('promotion_prices');
        $date_from = $req->input('date_from');
        $date_to = $req->input('date_to');
        $promotion_image = $req->input('promotion_image');
        $product_id = $req->input('product_id');
        $published = $req->input('published');
       $data =array('brand_name'=>brand_name, 'promotion_name'=>promotion_name, 'promotion_prices'=>promotion_prices,
           'date_from'=>date_from, 'date_to'=>date_to, 'promotion_image'=>promotion_image,
           'product_id'=>product_id, 'published'=>published);

       DB::table('tbl_promotion') ->insert($data);
       echo "yes";
    }
}
