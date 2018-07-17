<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Promotion;
use App\Product;

class Product extends CrudModel
{
    //validation fields
    public static $validationRules = [
        'pro_name' => 'required||max:255',
        'pro_code' => 'required||max:25',
        'model' => 'required||max:255',
        'product_desc' => 'required',
        'made' => 'required',
        'prices' => 'required||numeric',
        'quantity' => 'required||numeric',
        'published' =>'required'
    ];
    protected $table = 'tbl_products';//table name
    protected $fillable = [
        'pro_name',
        'pro_code',
        'model',
        'product_desc',
        'made',
        'prices',
        'count_product',
        'quantity',
        'brand_id',
        'category_id',
        'setting_id',
        'user_id',
        'product_has_gallery_id',
        'published',
    ];

    public function promotions() {
        return $this->hasManyThrough('App\Promotion','App\Brand','App\Category', 'id','brand_id','category_id');
    }
}
