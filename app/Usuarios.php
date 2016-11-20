<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    protected $fillable=[
        'nombre',
        'apellido',
        'dni',
        'direccion'
    ];
    
    public $timestamps = false;
}
