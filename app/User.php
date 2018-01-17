<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    const AUTH_REDIRECT = '/dashboard';
    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'usuarioapellido', 'usuariotipodocumento', 'usuarionumerodocumento', 'password', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function setPasswordAttribute($password)
    // {   
    //     $this->attributes['password'] = bcrypt($password);
    // }

    public function scopeSearch($query, $name)
    {
        return $query->where('name', 'like', "%$name%")
        ->orwhere('usuarioapellido', 'like', "%$name%")
        ->orwhere('usuarionumerodocumento', 'like', "%$name%");
    }

    //funcion para de uno a muchos
    public function user_matriculados()
    {
        return $this->hasMany('App\Matricula', 'usuarios_id');
    }
}
