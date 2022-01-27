<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $level = ['Basic', 'Intermediate', 'Advance', 'Master'];
        $date = $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+6 months')->format('Y-m-d');
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(20),
            'level' => $level[array_rand($level)],
            'pic_name' => $this->faker->name(),
            'start_date' => date('m/d/Y', strtotime($date)),
            'end_date' => date('m/d/Y', strtotime($date . ' + ' . random_int(1, 10) . ' days')),
            'is_active' => true,
        ];
    }
}
