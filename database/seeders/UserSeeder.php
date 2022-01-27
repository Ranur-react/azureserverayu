<?php

namespace Database\Seeders;

use App\Models\Hcbp;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = User::create([
            'nik' => '111111',
            'email' => 'superadmin@role.test',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $super_admin->assignRole('Super Admin');

        $atasan_learning_design = User::create([
            'nik' => '71025',
            'email' => 'Fithri_Novida@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $atasan_learning_design->assignRole('Atasan Learning Design');

        $learning_desain = User::create([
            'nik' => '81029',
            'email' => 'Nahdatul_Choi@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $learning_desain->assignRole('Learning Design');

        $karyawan1 = User::create([
            'nik' => '87113',
            'email' => 'eka_m_annisyah@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $karyawan1->assignRole('Learning Design');

        $karyawan2 = User::create([
            'nik' => '92038',
            'email' => 'tara_a_ramadhiani@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $karyawan4 = User::create([
            'nik' => '92101',
            'email' => 'satya_w_mukhlisin@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $karyawan4->assignRole('Learning Operation');

        $karyawan5 = User::create([
            'nik' => '93075',
            'email' => 'Annisa_N_Rahmatika@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        // $karyawan5->assignRole('Learning Operation');

        $karyawan6 = User::create([
            'nik' => '93123',
            'email' => 'joshua_rydley@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $karyawan6->assignRole('Learning Operation');

        $karyawan7 = User::create([
            'nik' => '82358',
            'email' => 'ivren_m_harahap@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $karyawan7->assignRole('Learning Operation');

        $karyawan8 = User::create([
            'nik' => '85028',
            'email' => 'Fuad_Rahadi@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $karyawan8->assignRole('Learning Operation');

        $karyawan9 = User::create([
            'nik' => '85065',
            'email' => 'Vestiyana_Rimayumanti@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $karyawan9->assignRole('Learning Operation');

        $karyawan10 = User::create([
            'nik' => '85072',
            'email' => 'Yoan_Eldilian@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $karyawan10->assignRole('Learning Operation');

        $atasan_learning_operation = User::create([
            'nik' => '83391',
            'email' => 'Ivan_Yuditia@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);

        $atasan_learning_operation->assignRole('Learning Operation');

        $hcbp = User::create([
            'nik' => '83395',
            'email' => 'Hcbp@telkomsel.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password12'),
        ]);
        

//        $atasan_learning_operation = User::create([
//            'name' => 'Atasan Learning Operation Role',
//            'email' => 'atasanlearningoperation@role.test',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password12'),
//        ]);
//
//        $atasan_learning_operation->assignRole('Atasan Learning Operation');

//        $atasan_karyawan = User::create([
//            'name' => 'Atasan Karyawan Role',
//            'email' => 'atasankaryawan@role.test',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password12'),
//        ]);
//
//        $atasan_karyawan->assignRole('Atasan Karyawan');

//        $karyawan = User::create([
//            'name' => 'Karyawan',
//            'email' => 'karyawan@role.test',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password12'),
//        ]);
//
//        $karyawan->assignRole('Karyawan');
    }
}
