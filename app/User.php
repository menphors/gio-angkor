<?php

namespace App;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//extend Authenticatable

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      //validation fields
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

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);

    }

    public function level() {
        return $this->hasManyThrough('App\Level','id');
    }

    // User has many orders ( One many relationship )
    public function orders() {
        return $this->hasMany(Order::class);
    }
}
