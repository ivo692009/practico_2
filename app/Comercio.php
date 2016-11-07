<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    protected $fillable=[
        'nombre',
        'direccion',
        'foto'
    ];
    
    public $timestamps = false;
}
