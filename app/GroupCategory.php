<?php

namespace App;


class GroupCategory extends CrudModel
{
    protected $table = 'tbl_group_category';
    protected $fillable = ['id', 'group_cat_name'];
}

