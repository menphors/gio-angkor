<?php

namespace App;



class Category extends CrudModel
{
    protected $table = 'tbl_category';
    protected $fillable = [
        'id',
        'category_name',
        'ordering',
        'pro_id',
        'published'
    ];
}
