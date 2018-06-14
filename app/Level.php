<?php

namespace App;


class Level extends CrudModel
{
    protected $table = 'tbl_level';
    protected $fillable = ['id', 'level_name', 'level_slog', 'remark'];
}
