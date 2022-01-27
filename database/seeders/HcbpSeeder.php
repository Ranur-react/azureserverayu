<?php

namespace Database\Seeders;

use App\Models\Hcbp;
use Illuminate\Database\Seeder;

class HcbpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hcbp = [
            [   
                'nik' => '83395', 
                'region' => 'HEAD OFFICE' , 
                'area' => 'HEAD OFFICE',
                'directorate' => 'Human Capital Management Directorate' , 
            ],
            [
                'nik' => '83395', 
                'region' => 'JABAR' , 
                'area' => 'AREA 1',
                'directorate' => 'Human Capital Management Directorate' , 
            ],
            [   'nik' => '83395', 
                'region' => 'SUMBANGSEL' , 
                'area' => 'AREA 1',
                'directorate' => 'Human Capital Management Directorate' , 
            ],
            [
                'nik' => '83395', 
                'region' => 'SUMBANGTENG' , 
                'area' => 'AREA 2',
                'directorate' => 'Sales Directorate' , 
            ],
        ];

        Hcbp::insert($hcbp); // Eloquent approach
    }
}
