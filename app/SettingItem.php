<?php

namespace App;

class SettingItem extends CrudModel
{
	public static $validationRules = [
        'code' => 'required',
        'name' => 'required',
        'value' => 'required',
    ];
    protected $fillable = ['type_id', 'code', 'name', 'value', 'note'];


    public function type() {
        return $this->belongsTo('App\SettingType', 'type_id');
    }

    public function products() {
        return $this->hasMany('App\Product');
    }

}
