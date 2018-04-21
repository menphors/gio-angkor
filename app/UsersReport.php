<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersReport extends Model
{
    protected $table = 'tbl_report_for_store';
    protected $fillable = [
        'id',
        'price',
        'product_id',
        'user_id',
        'order_id',
    ];
}
