<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;

abstract class CrudModel extends Model
{
    public static $validationRules = [];
    public static $createValidationRules = [];
    public static $updateValidationRules = [];
    
    public function saveOrUpdate($request) {
        return $this->fill($request->all())->save();
    }
}