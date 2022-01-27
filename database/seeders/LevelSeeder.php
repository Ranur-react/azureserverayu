<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            ['name' => 'Band 1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Band 2', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Band 3', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Band 4', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Band 5', 'created_at' => now(), 'updated_at' => now()],
        ];

        Level::insert($levels); // Eloquent approach
    }
}
