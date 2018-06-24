<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends CrudModel
{
    //
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
}
