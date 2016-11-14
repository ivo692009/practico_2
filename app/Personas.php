<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $table = 'personas';
    protected $fillable=[
        'nombre_y_app'    => 'required|string|min:7',
        'dni'             => 'required|int',
        'direccion'       => 'required|string|min:10',
        'foto'            => 'mimes:jpg',
    ];
    
    public $timestamps = false;
}
