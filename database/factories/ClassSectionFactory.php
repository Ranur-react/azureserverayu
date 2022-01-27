<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClassSectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $delivery_method = ['Instructor Training Led', 'Seminar', 'Sharing Session', 'Mentoring'];
        $date = $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 months')->format('Y-m-d\TH:i');
        return [
            'name' => $this->faker->name(),
            'delivery_method' => $delivery_method[array_rand($delivery_method)],
            'date_time' => $date,
            'is_active' => true,
        ];
    }
}
