<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const AUTH_REDIRECT = '/dashboard';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //'name', 'email', 'password', 'avatar', 'nickname', 'provider',  'provider_id'
        //'name', 'password', 'provider',  'provider_id'
        //'name', 'password'
        'name', 'usuarioapellido', 'usuariotipodocumento', 'usuarionumerodocumento', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }

    public function scopeSearch($query, $name)
    {
        return $query->where('name', 'like', "%$name%")
        ->orwhere('usuarioapellido', 'like', "%$name%")
        ->orwhere('usuarionumerodocumento', 'like', "%$name%");
        
        //return $query->where('cursonombre', 'like', "%$cursonombre%");
    }
}
