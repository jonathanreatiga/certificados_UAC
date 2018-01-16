<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estado extends Model
{
    use SoftDeletes;
    protected $table = 'estados';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'estadonombre', 'estadodescripcion', 'deleted_at'
    ];

    public function scopeSearch($query, $estadonombre)
    {
        return $query->where('estadonombre', 'like', "%$estadonombre%")
        ->orwhere('estadodescripcion', 'like', "%$estadonombre%");
    }

    //funcion para de uno a muchos
    public function matriculas_del_estado()
    {
        return $this->hasMany('App\Matricula', 'estados_id');
    }
}
