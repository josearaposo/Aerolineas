<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'aero_origen' ,
        'aero_destino',
        'companya_id' ,
        'hora_salida',
        'hora_llegada' ,
        'plazas',
        'precio',
    ];
}
