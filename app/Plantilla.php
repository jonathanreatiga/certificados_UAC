<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plantilla extends Model
{
    use SoftDeletes;
    protected $table = 'plantillas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plantillanombre', 'plantillahtml', 'plantillacss', 
        'plantilladescripcion', 'plantillaorientacion', 'plantillaformato',
        'deleted_at'
    ];

    public function scopeSearch($query, $plantillanombre)
    {
        return $query->where('plantillanombre', 'like', "%$plantillanombre%")
        ->orwhere('plantillaorientacion', 'like', "%$plantillanombre%")
        ->orwhere('plantilladescripcion', 'like', "%$plantillanombre%")
        ->orwhere('plantillaformato', 'like', "%$plantillanombre%");
        
        //return $query->where('cursonombre', 'like', "%$cursonombre%");
    }

    //funcion para de uno a muchos
    public function sesiones_de_plantilla()
    {
        return $this->hasMany('App\Sesion');
    }

}
