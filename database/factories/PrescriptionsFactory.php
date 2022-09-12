<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrescriptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'clinic_name' => $this->faker->name(),
            'medication_name' => $this->faker->name(),
            'dosage' => $this->faker->sentence(),
            'period' => $this->faker->dateTimeBetween(),
            'way_use' => $this->faker->word(),
            'observation' => $this->faker->paragraph(),
            'date' => $this->faker->date()
        ];
    }
}
