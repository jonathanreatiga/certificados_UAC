<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matricula extends Model
{
    use SoftDeletes;
    protected $table = 'matriculas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'matriculadescargas', 'sesiones_id', 'rol_id', 
        'estados_id', 'usuarios_id', 'deleted_at'
    ];

    public function scopeSearch($query, $id_matricula)
    {
        return $query->where('id', 'like', "%$id_matricula%");
        //->orwhere('sesionfechafinal', 'like', "%$sesionfecha%");
    }

    //de muchos a uno
    public function sesiones()
    {
        return $this->belongsTo('App\Sesion');
        //->withDefault();
    }
    //de muchos a uno
    public function rol()
    {
        return $this->belongsTo('App\Role');
        //->withDefault();
    }
    //de muchos a uno
    public function estados()
    {
        return $this->belongsTo('App\Estado');
        //->withDefault();
    }
    //de muchos a uno
    public function usuarios()
    {
        return $this->belongsTo('App\User');
        //->withDefault();
    }
}
