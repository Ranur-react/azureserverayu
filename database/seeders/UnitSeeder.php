<?php

namespace Database\Seeders;

use App\Models\OrganizationUnit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            ['name' => 'Unit 1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Unit 2', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Unit 3', 'created_at' => now(), 'updated_at' => now()],
        ];

        OrganizationUnit::insert($units); // Eloquent approach
    }
}
