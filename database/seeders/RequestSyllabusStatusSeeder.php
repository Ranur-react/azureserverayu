<?php

namespace Database\Seeders;

use App\Models\RequestSyllabusStatus;
use Illuminate\Database\Seeder;

class RequestSyllabusStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $requestSyllabusStatus = [
            ['name' => 'Approved by Learning Design', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Approved by Atasan Learning Design', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rejected by Learning Design', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rejected by Atasan Learning Design', 'created_at' => now(), 'updated_at' => now()],
        ];
        RequestSyllabusStatus::insert($requestSyllabusStatus); // Eloquent approach
    }
}
