<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ElearningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = ['Regular Capability', 'General Training', 'Critical Capability'];
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph(20),
            'category' => $category[array_rand($category)],
            'pic_name' => $this->faker->name(),
            'is_active' => true,
        ];
    }
}
