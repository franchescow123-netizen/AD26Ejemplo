<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    /** @use HasFactory<\Database\Factories\RecetaFactory> */
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'user_id',
        'titulo',
        'descripcion',
        'ingredientes',
        'instrucciones',
        'imagen',
    ];
    
    public function categoria()
    {
        //Relacion uno a muchos inversa con el modelo de categoria
        return $this->belongsTo(Categoria::class);
    }

        public function etiquetas()
    {
        //relacion de muchos a muchos con el modelo de etiqueta
        return $this->belongsToMany(Etiqueta::class);
    }

    public function user()
    {
        //Relacion uno a muchos inversa con el modelo de user
        return $this->belongsTo(User::class);
    }
}