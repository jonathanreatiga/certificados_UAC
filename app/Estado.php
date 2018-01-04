<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'estadonombre', 'estadodescripcion'
    ];

    public function scopeSearch($query, $estadonombre)
    {
        return $query->where('estadonombre', 'like', "%$estadonombre%")
        ->orwhere('estadodescripcion', 'like', "%$estadonombre%");
        
        //return $query->where('cursonombre', 'like', "%$cursonombre%");
    }
}
