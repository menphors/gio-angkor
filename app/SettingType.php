<?php

namespace App;

class SettingType extends CrudModel
{
    protected $fillable = ['code', 'name_en', 'name_kh', 'note'];
    
    public function items() {
        return $this->hasMany('App\SettingItem');
    }
}
