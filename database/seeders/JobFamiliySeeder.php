<?php

namespace Database\Seeders;

use App\Models\JobFamily;
use Illuminate\Database\Seeder;

class JobFamiliySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobFamilies = [
            ['name' => 'Business Strategic Planning & Development', 'number' => 0, 'job_family_code' => 'SB' ,  'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Business Administration', 'number' => 0, 'job_family_code' => 'BA' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Product & Marketing Management', 'number' => 0, 'job_family_code' => 'PDM' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sales & Customer Management', 'number' => 0, 'job_family_code' => 'SC' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Information Technology', 'number' => 0, 'job_family_code' => 'IT' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Data Management', 'number' => 0, 'job_family_code' => 'DM' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Network Management', 'number' => 0, 'job_family_code' => 'NET' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Project Management', 'number' => 0, 'job_family_code' => 'PM' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Supply Chain Management', 'number' => 0, 'job_family_code' => 'SCM' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Human Capital Management', 'number' => 0, 'job_family_code' => 'HC' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finance & Accounting Management', 'number' => 0, 'job_family_code' => 'FA' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Legal & Regulatory','number' => 0, 'job_family_code' => 'LR' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Communication & Relationship', 'number' => 0, 'job_family_code' => 'CR' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Governance, Risk & Compliance', 'number' => 0, 'job_family_code' => 'GR' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'General Services', 'number' => 0, 'job_family_code' => 'GS' , 'description' => 'Kelompok jabatan yang bertanggung jawab', 'parent_id' => NULL , 'level' => 0, 'level_description' => 'Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Corporate Strategic Management', 'number' => 1, 'job_family_code' => 'SB.01' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 1 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Business Development', 'number' => 2, 'job_family_code' => 'SB.02' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 1 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Business Capabilities', 'number' => 1, 'job_family_code' => 'BA.01' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 2 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Office Administration', 'number' => 2, 'job_family_code' => 'BA.02' ,'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 2 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Product & Services Management', 'number' => 1, 'job_family_code' => 'PDM.01' ,  'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 3 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Marketing Management', 'number' => 2, 'job_family_code' => 'PDM.02' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 3 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Sales Management', 'number' => 1, 'job_family_code' => 'SC.01' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 4 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Customer Experience', 'number' => 2, 'job_family_code' => 'SC.02' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 4 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Customer Care & Support', 'number' => 3, 'job_family_code' => 'SC.03' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 4 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Application/ Software Management', 'number' => 1, 'job_family_code' => 'IT.01' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 5 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT Infrastructure Management', 'number' => 2, 'job_family_code' => 'IT.02' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 5 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT Security Management', 'number' => 3, 'job_family_code' => 'IT.03' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 5 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT Services Management', 'number' => 4, 'job_family_code' => 'IT.04' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 5 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT Strategic Management', 'number' => 5, 'job_family_code' => 'IT.05' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 5 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Data Engineering', 'number' => 1, 'job_family_code' => 'DM.01' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 6 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Data Science & Analytics', 'number' => 2, 'job_family_code' => 'DM.02' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 6 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Core Network and Services Platforms', 'number' => 1, 'job_family_code' => 'NET.01' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 7 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Network Infrastructure', 'number' => 2, 'job_family_code' => 'NET.02' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 7 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Network Quality Management', 'number' => 3, 'job_family_code' => 'NET.03' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 7 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Network Strategic Management', 'number' => 4, 'job_family_code' => 'NET.04' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 7 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Radio Access Network', 'number' => 5, 'job_family_code' => 'NET.05' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 7 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Transport Network', 'number' => 6, 'job_family_code' => 'NET.06' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 7 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Project Execution', 'number' => 1, 'job_family_code' => 'PM.01' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 8 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Project Planning & Control', 'number' => 2, 'job_family_code' => 'PM.02' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 8 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Logistic', 'number' => 1, 'job_family_code' => 'SCM.01' , 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 9 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Procurement', 'number' => 2, 'job_family_code' => 'SCM.02', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 9 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Employee Experience','number' => 1, 'job_family_code' => 'HC.01', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 10 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Industrial Relation', 'number' => 2, 'job_family_code' => 'HC.02', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 10 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Organization Management', 'number' => 3, 'job_family_code' => 'HC.03', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 10 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reward Management', 'number' => 4, 'job_family_code' => 'HC.04', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 10 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Talent Management', 'number' => 5, 'job_family_code' => 'HC.05', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 10 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Accounting', 'number' => 1, 'job_family_code' => 'FA.01', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 11 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finance', 'number' => 2, 'job_family_code' => 'FA.02',  'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 11 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tax', 'number' => 3, 'job_family_code' => 'FA.03',  'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 11 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Corporate Legal', 'number' => 1, 'job_family_code' => 'LR.01', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 12 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Litigation', 'number' => 2, 'job_family_code' => 'LR.02', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 12 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Regulatory', 'number' => 3, 'job_family_code' => 'LR.03', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 12 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Community Management', 'number' => 1, 'job_family_code' => 'CR.01', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 13 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate Affairs', 'number' => 2, 'job_family_code' => 'CR.02', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 13 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate Communication', 'number' => 3, 'job_family_code' => 'CR.03', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 13 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Audit', 'number' => 1, 'job_family_code' => 'GR.01', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 14 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Compliance', 'number' => 2, 'job_family_code' => 'GR.02', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 14 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Risk', 'number' => 3, 'job_family_code' => 'GR.03', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 14 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'HSSE', 'number' => 1, 'job_family_code' => 'GS.01', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 15 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Office Management', 'number' => 2, 'job_family_code' => 'GS.01', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 15 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Property Management', 'number' => 3, 'job_family_code' => 'GS.01', 'description' => 'Sub kelompok jabatan yang bertanggung jawab', 'parent_id' => 15 , 'level' => 1, 'level_description' => 'Sub Job Family' , 'created_at' => now(), 'updated_at' => now()],

//            ['name' => 'Product & Marketing Management', 'job_family_code' => 'PDM' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Sales & Customer Management', 'job_family_code' => 'SC' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Information Technology', 'job_family_code' => 'IT' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Data Management', 'job_family_code' => 'DM' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Network Management', 'job_family_code' => 'NET' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Project Management', 'job_family_code' => 'PM' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Supply Chain Management', 'job_family_code' => 'SCM' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Human Capital Management', 'job_family_code' => 'HC' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Finance & Accounting Management', 'job_family_code' => 'FA' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Legal & Regulatory', 'job_family_code' => 'LR' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Communication & Relationship', 'job_family_code' => 'CR' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Governance, Risk & Compliance', 'job_family_code' => 'GR' , 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'General Services', 'job_family_code' => 'GS' , 'created_at' => now(), 'updated_at' => now()],
        ];

        JobFamily::insert($jobFamilies); // Eloquent approach
    }
}
