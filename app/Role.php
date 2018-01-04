<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rolnombre', 'rolcargo'
    ];

    public function scopeSearch($query, $rolnombre)
    {
        return $query->where('rolnombre', 'like', "%$rolnombre%")
        ->orwhere('rolcargo', 'like', "%$rolnombre%");
    }
}
