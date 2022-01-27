<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClassVideoConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $platform = ['Google Meet', 'Zoom', 'CloudX', 'Teams'];
        return [
            'name' => $this->faker->name(),
            'platform' => $platform[array_rand($platform)],
            'url' => $this->faker->url()
        ];
    }
}
