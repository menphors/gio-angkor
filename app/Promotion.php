<?php

namespace App;


class Promotion extends CrudModel
{
    public static $validationRules = [
        'promotion_name'=> 'required||max:25',
        'promotion_prices'=>'required||numeric',
        'promotion_image'=>'nullable',
        'discount_percentage'=>'required||numeric',
        'product_id'=>'required||numeric',
        'brand_id'=>'required||numeric',
        'category_id'=>'required||numeric',
        'ordering'=>'required',
        'published'=>'required',
        'promotion_expire_date'=>'nullable|date',
        'date_from'=>'nullable|date',
        'date_to'=>'nullable|date',
    ];
    protected $table = 'tbl_promotion';//table name
    protected $fillable = [
        'promotion_name',
        'promotion_prices',
        'promotion_image',
        'discount_percentage',
        'product_id',
        'brand_id',
        'ordering',
        'category_id',
        'promotion_expire_date',
        'date_from',
        'date_to',
        'published',
        'active'
    ];

}
