<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vuelo extends Model
{
    use HasFactory;

    public function reservas(): HasMany
    {
   	 return $this->hasMany(Reserva::class);
    }

    public function companya(): BelongsTo
    {
   	 return $this->belongsTo(Companya::class);
    }

    public function origen(): BelongsTo
    {
   	 return $this->belongsTo(Aeropuerto::class, 'aero_origen');
    }

    public function destino(): BelongsTo
    {
   	 return $this->belongsTo(Aeropuerto::class, 'aero_destino');
    }

    public function companiaAerea()
    {
        return $this->belongsTo(Companya::class, 'companya_id');
    }


    public function plazasTotales()
    {
        return $this->plazas;
    }

    public function plazasDisponibles()
    {
        return $this->plazas - $this->reservas->count();
    }

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
