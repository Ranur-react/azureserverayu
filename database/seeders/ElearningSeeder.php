<?php

namespace Database\Seeders;

use App\Models\Elearning;
use App\Models\ElearningText;
use App\Models\Module;
use Illuminate\Database\Seeder;

class ElearningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Elearning::factory(100)->create();

        Elearning::all()->each(function ($elearning) {
            $rand = rand(1, 5);
            for ($i = 1; $i <= $rand; $i++) {
                Module::factory()->create([
                    'elearning_id' => $elearning->id,
                    'section' => $i
                ]);
            }
        });

        Module::all()->each(function ($module) {
            ElearningText::factory()->create([
                'module_id' => $module->id
            ]);
        });
    }
}
