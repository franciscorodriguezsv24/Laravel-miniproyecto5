<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maestro>
 */
class MaestroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre' => fake()->name(),
            'Correo' =>fake()->unique()->safeEmail(),
            'Direccion' => fake()->address(),
            'fecha_de_nacimiento' => fake()->date()
        ];
    }
}
