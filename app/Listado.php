<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listado extends Model
{
    protected $table = 'lista_productos';
    protected $fillable=[
        'id_comercio',
        'nombre' => 'required|string|min:7',
        'cantidad_porciones',
        'precio' => 'required',
        'tiempo_produccion',
        'foto_producto'=> 'mimes:jpg'
    ];
    
    public $timestamps = false;
}
