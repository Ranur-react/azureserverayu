<?php

namespace Database\Seeders;

use App\Models\UserNeedStatus;
use Illuminate\Database\Seeder;

class UserNeedStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userNeedStatus = [
            ['name' => 'Waiting For HCBP', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rejected By HCBP', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Approved By HCBP', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rejected By Learning Architect', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Approved By Learning Architect', 'created_at' => now(), 'updated_at' => now()],
        ];
        UserNeedStatus::insert($userNeedStatus); // Eloquent approach
    }
}
