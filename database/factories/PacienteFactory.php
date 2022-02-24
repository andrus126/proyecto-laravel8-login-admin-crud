<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ci' =>$this->faker->randomNumber(7, true),
            'nombre' =>$this->faker->firstName(),
            'paterno' =>$this->faker->lastName(),
            'materno' => $this->faker->lastName(),
            'edad' => $this->faker->numberBetween(10, 99),
            'telefono' => $this->faker->randomNumber(8, true),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'persona' => $this->faker->randomElement(['Adulta', 'Niño']),
        ];
    }
}
