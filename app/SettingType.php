<?php

namespace App;

class SettingType extends CrudModel
{
    protected $fillable = ['code', 'name', 'note'];
    public static $validationRules = [
        'code'=> 'required||max:25',
        'name'=>'required'
    ];
    
    public function items() {
        return $this->hasMany('App\SettingItem');
    }
    public function products() {
        return $this->hasMany('App\Product');
    }
}
