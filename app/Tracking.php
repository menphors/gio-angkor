<?php

namespace App;


class Tracking extends CrudModel
{
    public static $validationRules = [
        'tracking_number'=> 'required||max:255',
        'store_id'=>'required||max:25',
        'product_id'=> 'required||numeric||max:25',
        'status'=> 'required'
    ];
    protected $table = 'tbl_tracking';//table name
    protected $fillable = ['tracking_number','store_id','product_id', 'status'];
}
