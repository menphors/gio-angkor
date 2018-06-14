<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreReport extends Model
{
    protected $table ='tbl_store';
    protected $fillable = [
        'id',
        'store_name',
        'store_location_address',
        'store_approval',
        'store_contact',
        'store_created_date',
        'published',
        'created_at',
        'updated_at'
    ];
}

