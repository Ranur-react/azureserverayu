<?php

namespace Database\Seeders;

use App\Models\ClassSection;
use App\Models\ClassText;
use App\Models\ClassVideoConference;
use App\Models\TrainingClass;
use Illuminate\Database\Seeder;

class TrainingClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrainingClass::factory(100)->create();

        TrainingClass::all()->each(function ($trainingclass) {
            $rand = rand(1, 5);
            for ($i = 1; $i <= $rand; $i++) {
                ClassSection::factory()->create([
                    'class_id' => $trainingclass->id,
                    'section' => $i,
                ]);
            }
        });

        ClassSection::all()->each(function ($classsection) {
            ClassVideoConference::factory()->create([
                'section_id' => $classsection->id
            ]);
            ClassText::factory()->create([
                'section_id' => $classsection->id
            ]);
        });
    }
}
