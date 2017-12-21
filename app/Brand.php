<?php

namespace App;


class Brand extends CrudModel
{
    protected $table = 'tbl_brand';
    protected $fillable = ['id', 'brand_name', 'images_url', 'ordering','official'];
}
