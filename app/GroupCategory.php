<?php

namespace App;


class GroupCategory extends CrudModel
{
    protected $table = 'tbl_group_category';
    protected $fillable = [
        'group_cat_name',
        'category_id',
        'sub_category_id'
    ];


}
