<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriaFactory> */
    use HasFactory;

    public function recetas()
    {
        // Relacion de uno a muchos con el modelo de Receta, una categoria puede tener muchas recetas
        return $this->hasMany(Receta::class);
    }
}
