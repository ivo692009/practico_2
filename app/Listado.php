<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listado extends Model
{
    protected $table = 'lista_productos';
    protected $fillable=[
        'id_comercio',
        'nombre',
        'cantidad_porciones',
        'precio',
        'tiempo_produccion',
        'foto_producto'
    ];
    
    public $timestamps = false;
}
