<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matriculas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'matriculadescargas', 'sesiones_id', 'rol_id', 
        'estados_id'
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
}
