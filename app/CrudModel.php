<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;

abstract class CrudModel extends Model
{
    public static $validationRules = [];//validate normal
    public static $createValidationRules = [];
    public static $updateValidationRules = [];//different create and update
    
    public function saveOrUpdate($request) {
        return $this->fill($request->all())->save();
    }
    
}