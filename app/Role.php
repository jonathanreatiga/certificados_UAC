<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    protected $table = 'roles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rolnombre', 'rolcargo', 'deleted_at'
    ];

    public function scopeSearch($query, $rolnombre)
    {
        return $query->where('rolnombre', 'like', "%$rolnombre%")
        ->orwhere('rolcargo', 'like', "%$rolnombre%");
    }

    //funcion para de uno a muchos
    public function matriculas_del_rol()
    {
        return $this->hasMany('App\Matricula');
    }
}
