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
        'status'
    ];



}
