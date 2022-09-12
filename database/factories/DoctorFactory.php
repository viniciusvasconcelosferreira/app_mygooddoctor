<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['Male', 'Female', 'Non binary']);
        $brazilian_states = $this->faker->randomElement(['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO']);

        return [
            'crm' => $this->faker->numerify('CRM/' . $brazilian_states . ' ######'),
            'cpf' => $this->faker->numerify('###.###.###-##'),
            'rg' => $this->faker->numerify('#######'),
            'gender' => $gender,
            'education' => $this->faker->sentence(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'mobile_phone' => $this->faker->phoneNumber(),
            'department' => $this->faker->sentence(),
            'description' => $this->faker->text(1500),
            'social' => serialize(array($this->faker->unique()->userName(), $this->faker->unique()->userName(), $this->faker->unique()->userName()))
        ];
    }
}
