<?php

namespace Database\Seeders;

use App\Models\VendorStatus;
use Illuminate\Database\Seeder;

class VendorStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendorStatus = [
            ['name' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Revision', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Re-Aktivasi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Revision Registration', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Request For Re-approval', 'created_at' => now(), 'updated_at' => now()],
        ];
        VendorStatus::insert($vendorStatus); // Eloquent approach
    }
}
