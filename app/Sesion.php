<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    protected $table = 'sesiones';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sesionfechainicio', 'sesionfechafinal', 'curso_id'
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
}
