<?php

namespace App;

class SettingItem extends CrudModel
{
    protected $fillable = ['type_id', 'code', 'name', 'value', 'note'];


    public function type() {
        return $this->belongsTo('App\SettingType', 'type_id');
    }

}
