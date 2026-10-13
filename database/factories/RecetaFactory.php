<?php

namespace Database\Factories;

use App\Models\Receta;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Receta>
 */
class RecetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categoria_id' => Categoria::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'titulo' => $this->faker->sentence(),
            'descripciones' => $this->faker->text(), // Mismo nombre que en la migración
            'ingredientes' => $this->faker->text(),
            'instrucciones' => $this->faker->text(),
            'imagen' => $this->faker->imageUrl(),
        ];
    }
}