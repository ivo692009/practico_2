<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    protected $table = 'reportes';
    protected $fillable=[
        'titulo',
        'descripcion'
    ];
    
    public $timestamps = false;
}
