<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Disput extends Model
{
    protected $table = 'tbl_history_user';//table name
    protected $fillable = [
        'quantity',
        'price',
        'date',
        'status'
    ];
}
