<?php

namespace App;



class LogActivity extends CrudModel
{
    protected $table = 'tbl_history_user';
    protected $fillable = [
        'id',
        'quantity',
        'price',
        'date',
        'status',
        'created_at',
        'updated_at',
        'flg_login',
        'flg_logout',
        'session',
    ];



}
