<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'DUI' => fake()->randomNumber(8),
            'Nombre' => fake()->name(),
            'Correo' => fake()->unique()->safeEmail(),
            'Direccion' => fake()->address(),
            'nacimiento' => fake()->date()
        ];
    }
}
