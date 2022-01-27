<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['name' => 'Permanent', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Status 2', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Status 3', 'created_at' => now(), 'updated_at' => now()],
        ];

        Status::insert($statuses); // Eloquent approach
    }
}
