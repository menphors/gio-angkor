<?php

namespace App;


class SubCategory extends CrudModel
{
	public static $validationRules = [
        'sub_category_name' => 'required',
        'cat_group_id' => 'required',
    ];
    protected $table = 'tbl_sub_category';
    protected $fillable = [
        'cat_group_id',
        'sub_category_name',
        'published'
    ];
}
