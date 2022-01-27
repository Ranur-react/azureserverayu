<?php

namespace Database\Seeders;

use App\Models\CurriculumStatus;
use Illuminate\Database\Seeder;

class CurriculumStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curriculumStatus = [
            ['name' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Deactive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reject', 'created_at' => now(), 'updated_at' => now()],
        ];
        CurriculumStatus::insert($curriculumStatus); // Eloquent approach
    }
}
