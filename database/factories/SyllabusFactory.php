<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JobFamily;
use App\Models\SyllabusStatus;

class SyllabusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => rand(1, 2),
            'syllabus_code' => "SB-001",
            'training_name' => $this->faker->sentence(7),
            'training_summary' => $this->faker->text(200),
            'training_background' => $this->faker->text(5000),
            'training_description' => $this->faker->text(5000),
            'learning_scope' => "<p><b>test</b></p>",
            'status_id' => SyllabusStatus::inRandomOrder()->first(),
            'job_family_id' => JobFamily::inRandomOrder()->first(),
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => 81029,
            'updated_by' => 81029,
        ];
    }
}
