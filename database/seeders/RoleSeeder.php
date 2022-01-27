<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Super Admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Atasan Learning Design',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Learning Design',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Learning Operation',
            'guard_name' => 'web'
        ]);

//        Role::create([
//            'name' => 'Atasan Karyawan',
//            'guard_name' => 'web'
//        ]);
//
//        Role::create([
//            'name' => 'Karyawan',
//            'guard_name' => 'web'
//        ]);
    }
}
