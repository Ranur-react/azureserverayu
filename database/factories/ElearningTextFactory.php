<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ElearningTextFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'text' => $this->faker->paragraph(40)
        ];
    }
}
