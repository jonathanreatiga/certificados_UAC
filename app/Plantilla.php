<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantilla extends Model
{
    //
    protected $table = 'plantillas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plantillanombre', 'plantillahtml', 'plantillacss', 'plantilladescripcion', 'plantillaorientacion', 'plantillaformato'
    ];

    public function scopeSearch($query, $plantillanombre)
    {
        return $query->where('plantillanombre', 'like', "%$plantillanombre%")
        ->orwhere('plantillaorientacion', 'like', "%$plantillanombre%")
        ->orwhere('plantilladescripcion', 'like', "%$plantillanombre%")
        ->orwhere('plantillaformato', 'like', "%$plantillanombre%");
        
        //return $query->where('cursonombre', 'like', "%$cursonombre%");
    }

}
