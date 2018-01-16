<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;
    protected $table = 'cursos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cursonombre', 'cursodescripcion', 'cursonumerohoras', 'deleted_at'
    ];

    public function scopeSearch($query, $cursonombre)
    {
        return $query->where('cursonombre', 'like', "%$cursonombre%")
        ->orwhere('cursodescripcion', 'like', "%$cursonombre%")
        ->orwhere('cursonumerohoras', 'like', "%$cursonombre%");
        //return $query->where('cursonombre', 'like', "%$cursonombre%");
    }

    //funcion para de uno a muchos
    public function sesiones_del_curso()
    {
        return $this->hasMany('App\Sesion', 'curso_id');
    }
}
