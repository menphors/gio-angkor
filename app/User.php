<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//extend Authenticatable

class User extends CrudModel
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
'tel'
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
