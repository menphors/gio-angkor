<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
   // protected $table ='products';
    protected $data ='products';
    protected $fillable = [
        'pro_code','pro_name', 'brand', 'category','model','price', 'color','promotion','publish','gallery','desc',
    ];
}
