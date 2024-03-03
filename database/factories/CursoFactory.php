<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'curso_nom' => $this->faker->sentence(2),
            'horas' =>  rand(100,900),
            'estado' => $this->faker->randomElement([0, 1]), // Assuming 'estado' can be either 0 or 1
            'docente_id' => $this->faker->numberBetween(1, 5), // Assuming there are docentes with IDs from 1 to 5
            'grado_id' => $this->faker->numberBetween(1, 5), // Assuming there are grados with IDs from 1 to 5
            // Adjust the range of IDs based on your actual data
        ];
    }
}
