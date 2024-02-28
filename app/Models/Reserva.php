<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reserva extends Model
{
    use HasFactory;

    public function usuario(): BelongsTo
    {
   	 return $this->belongsTo(User::class);
    }

    public function vuelo(): BelongsTo
    {
   	 return $this->belongsTo(Vuelo::class);
    }


}
