<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sesion extends Model
{
    use SoftDeletes;
    protected $table = 'sesiones';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sesionfechainicio', 'sesionfechafinal', 'curso_id', 
        'plantilla_id', 'deleted_at'
    ];

    public function scopeSearch($query, $sesionfecha)
    {
        return $query->where('sesionfechainicio', 'like', "%$sesionfecha%")
        ->orwhere('sesionfechafinal', 'like', "%$sesionfecha%");
        
        //return $query->where('cursonombre', 'like', "%$cursonombre%");
    }

    //de muchos a uno
    public function curso()
    {
        return $this->belongsTo('App\Curso');
        //->withDefault();
    }
    //de muchos a uno
    public function plantilla()
    {
        return $this->belongsTo('App\Plantilla');
        //->withDefault();
    }

    //funcion para de uno a muchos
    public function matriculas_de_sesion()
    {
        return $this->hasMany('App\Matricula', 'sesiones_id');
    }
}
