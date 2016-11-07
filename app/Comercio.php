<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    protected $table = 'comercio_listado';
    protected $fillable=[
        'nombre'    => 'required|string|min:7',
        'direccion' => 'required|string|min:10',
        'foto'      => 'mimes:jpg',
    ];
    
    public $timestamps = false;
}
