<?php

namespace Database\Seeders;

use App\Models\SyllabusStatus;
use Illuminate\Database\Seeder;

class SyllabusStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $syllabusStatus = [
            ['name' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Deactive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reject', 'created_at' => now(), 'updated_at' => now()],
        ];
        SyllabusStatus::insert($syllabusStatus); // Eloquent approach

    }

}
