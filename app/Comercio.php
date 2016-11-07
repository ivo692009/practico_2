<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    protected $table = 'comercio_listado';
    protected $fillable=[
        'nombre',
        'direccion',
        'foto'
    ];
    
    public $timestamps = false;
}
