<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Companya extends Model
{
    use HasFactory;

    public function vuelos(): HasMany
    {
   	 return $this->hasMany(Vuelo::class);
    }

}
