<?php

namespace App;


class SubCategory extends CrudModel
{
    protected $table = 'tbl_sub_category';
    protected $fillable = [
        'cat_group_id',
        'sub_category_name',
        'published'
    ];
}
