<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Users as Authenticatable;
//extend Authenticatable

class Users extends CrudModel
{
    public static $validationRules = [
        'username' => 'required||max:255',
        'tel' => 'required||numeric',
        'dob' => 'required',
        'email' => 'required||email',
        'password' => 'required',
        'level_id' => 'required',
        'gender' => 'required'
    ];

    protected $fillable = [
    'name',
    'first_name',
    'last_name',
    'gender',
    'dob',
    'username',
    'email',
    'password',
    'forgot_password',
    'updated_password',
    'flag_sec',
    'log_date',
    'role_id',
    'level_id',
    'address',
    'published',
    'created_by',
    'tel',
    'admin'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
