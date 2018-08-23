<?php

namespace App;


class Order extends CrudModel
{
    // public static $validationRules = [
    //     'order_unit_price'=> 'required||numeric||max:25',
    //     'discount'=>'required||max:25',
    //     'quantity'=> 'required||numeric||max:25'
    // ];
    protected $table = 'tbl_order';//table name
    protected $fillable = ['id', 'order_unit_price', 'discount','quantity', 'order_date','status_product','published','first_name','last_name','email','phone','payment_type','payment_code','user_id','product_id'];
}
