<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            ['name' => 'Location 1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Location 2', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Location 3', 'created_at' => now(), 'updated_at' => now()],
        ];

        Location::insert($locations); // Eloquent approach
    }
}
