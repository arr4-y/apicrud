<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'foto' => $this->faker->name(),
          /*  'estudiante_edad' => $this->faker->numberBetween(10, 20),
              'estado' => 1, // Adjust the default value of 'estado' field as needed
          */
            'estudiante_dni' => $this->faker->numerify('##########'),
            'estudiante_telf' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'estudiante_fecnac' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
