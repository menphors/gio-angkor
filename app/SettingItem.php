<?php

namespace App;

class SettingItem extends CrudModel
{
    protected $fillable = ['type_id', 'code', 'name_en', 'name_kh', 'value', 'note'];

    public function __construct() {
        parent::__construct();
    }
    
    public function type() {
        return $this->belongsTo('App\SettingType', 'type_id');
    }
}
