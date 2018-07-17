<?php

namespace App;


class Level extends CrudModel
{
	public static $validationRules = [
        'level_name' => 'required',
        'level_slog' => 'required',
    ];
    protected $table = 'tbl_level';
    protected $fillable = ['id', 'level_name', 'level_slog', 'remark','published'];
    public function products() {
        return $this->hasMany('App\User');
    }
}
