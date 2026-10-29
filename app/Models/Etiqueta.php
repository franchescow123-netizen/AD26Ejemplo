<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    /** @use HasFactory<\Database\Factories\EtiquetaFactory> */
    use HasFactory;

    public function recetas()
    {
        // Relación muchos a muchos con la tabla 'recetas'
        return $this->belongsToMany(Receta::class);
    }
}
