<?php

namespace Database\Seeders;

use App\Models\SubJobFamily;
use Illuminate\Database\Seeder;

class SubJobFamiliySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subJobFamilies = [
            ['name' => 'Business Capabilities & Administration', 'number' => 1 , 'sub_job_family_code' => 'SB.01', 'job_family_id' => 1 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Business Development', 'number' => 2 , 'sub_job_family_code' => 'SB.02', 'job_family_id' => 1 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate Strategic Management', 'number' => 3 , 'sub_job_family_code' => 'SB.03', 'job_family_id' => 1 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Marketing Management', 'number' => 1 , 'sub_job_family_code' => 'PDM.01', 'job_family_id' => 2 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Customer Care & Support', 'number' => 2 , 'sub_job_family_code' => 'PDM.02', 'job_family_id' => 2 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Customer Care & Support', 'number' => 1 , 'sub_job_family_code' => 'SC.01', 'job_family_id' => 3 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Customer Experience', 'number' => 2 , 'sub_job_family_code' => 'SC.02', 'job_family_id' => 3 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sales Management', 'number' => 3 , 'sub_job_family_code' => 'SC.03', 'job_family_id' => 3 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Application/ Software Management', 'number' => 1 , 'sub_job_family_code' => 'IT.01', 'job_family_id' => 4 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT Infrastructure Management', 'number' => 2 , 'sub_job_family_code' => 'IT.02', 'job_family_id' => 4 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT Security Management', 'number' => 3 , 'sub_job_family_code' => 'IT.03', 'job_family_id' => 4 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT Services Management', 'number' => 4 , 'sub_job_family_code' => 'IT.04', 'job_family_id' => 4 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT Strategic Management', 'number' => 5 , 'sub_job_family_code' => 'IT.05', 'job_family_id' => 4 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Data Engineering', 'number' => 1 , 'sub_job_family_code' => 'DM.05', 'job_family_id' => 5 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Data Science & Analytics', 'number' => 2 , 'sub_job_family_code' => 'DM.02', 'job_family_id' => 5 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Core Network and Services Platforms', 'number' => 1 , 'sub_job_family_code' => 'NET.01', 'job_family_id' => 6 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Network Infrastructure', 'number' => 2 , 'sub_job_family_code' => 'NET.02', 'job_family_id' => 6 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Network Quality Management', 'number' => 3 , 'sub_job_family_code' => 'NET.03', 'job_family_id' => 6 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Network Strategic Management', 'number' => 4 , 'sub_job_family_code' => 'NET.04', 'job_family_id' => 6 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Radio Access Network', 'number' => 5 , 'sub_job_family_code' => 'NET.05', 'job_family_id' => 6 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Transport Network', 'number' => 6 , 'sub_job_family_code' => 'NET.06', 'job_family_id' => 6 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Project Execution', 'number' => 1 , 'sub_job_family_code' => 'PM.01', 'job_family_id' => 7 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Project Planning & Control', 'number' => 2 , 'sub_job_family_code' => 'PM.02', 'job_family_id' => 7 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Logistic', 'number' => 1 , 'sub_job_family_code' => 'SCM.01', 'job_family_id' => 8 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Procurement', 'number' => 2 , 'sub_job_family_code' => 'SCM.02', 'job_family_id' => 8 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Employee Experience', 'number' => 1 , 'sub_job_family_code' => 'HC.01', 'job_family_id' => 9 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Industrial Relation', 'number' => 2 , 'sub_job_family_code' => 'HC.02', 'job_family_id' => 9 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Organization Management', 'number' => 3 , 'sub_job_family_code' => 'HC.03', 'job_family_id' => 9 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reward Management', 'number' => 4 , 'sub_job_family_code' => 'HC.04', 'job_family_id' => 9 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Talent Management', 'number' => 5 , 'sub_job_family_code' => 'HC.05', 'job_family_id' => 9 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Accounting', 'number' => 1 , 'sub_job_family_code' => 'FA.01', 'job_family_id' => 10 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finance', 'number' => 2 , 'sub_job_family_code' => 'FA.02', 'job_family_id' => 10 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tax', 'number' => 3 , 'sub_job_family_code' => 'FA.03', 'job_family_id' => 10 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Corporate Legal', 'number' => 1 , 'sub_job_family_code' => 'LR.01', 'job_family_id' => 11 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Litigation', 'number' => 2 , 'sub_job_family_code' => 'LR.02', 'job_family_id' => 11 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Regulatory', 'number' => 3 , 'sub_job_family_code' => 'LR.03', 'job_family_id' => 11 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Community Management', 'number' => 1 , 'sub_job_family_code' => 'CR.01', 'job_family_id' => 12 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate Affairs', 'number' => 2 , 'sub_job_family_code' => 'CR.02', 'job_family_id' => 12 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate Communication', 'number' => 3 , 'sub_job_family_code' => 'CR.03', 'job_family_id' => 12 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Audit', 'number' => 1 , 'sub_job_family_code' => 'GR.01', 'job_family_id' => 13 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Compliance', 'number' => 2 , 'sub_job_family_code' => 'GR.02', 'job_family_id' => 13 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Risk', 'number' => 3 , 'sub_job_family_code' => 'GR.03', 'job_family_id' => 13 , 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'HSSE', 'number' => 1 , 'sub_job_family_code' => 'GS.01', 'job_family_id' => 14 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Office Management', 'number' => 2 , 'sub_job_family_code' => 'GS.02', 'job_family_id' => 14 , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Property Management', 'number' => 3 , 'sub_job_family_code' => 'GS.03', 'job_family_id' => 14 , 'created_at' => now(), 'updated_at' => now()],
        ];

        SubJobFamily::insert($subJobFamilies); // Eloquent approach
    }
}
