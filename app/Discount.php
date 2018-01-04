<?php

namespace App;


class Discount extends CrudModel
{
    public static $validationRules = [
        'discount_percentage'=> 'required||max:25',
        'quantity'=>'required||numeric',
        'published'=>'nullable',
        'product_id'=>'required||numeric',
        'category_id'=>'required||numeric',
        'store_id'=>'required||numeric',
        'date_from'=>'nullable|date',
        'date_to'=>'nullable|date',
    ];
    protected $table = 'tbl_discount';
    protected $fillable = [
        'discount_percentage',
        'quantity',
        'product_id',
        'category_id',
        'store_id',
        'date_from',
        'date_to',
        'published'
    ];

}
