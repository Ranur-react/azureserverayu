<?php

namespace Database\Seeders;

use App\Models\CurriculumStatus;
use App\Models\Hcbp;
use App\Models\Level;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            EmployeeSeeder::class,
            HcbpSeeder::class,
            UserSeeder::class,
            PermissionSeeder::class,
            JobFamiliySeeder::class,
            // CompetencySeeder::class,
//            NewCompetencySeeder::class,
            PrfCompetencyCatalogTableSeeder::class,
            PrfCompetencyProficiencyTableSeeder::class,
            PrfCompetencyRequirementsTableSeeder::class,
            LevelSeeder::class,
            StatusSeeder::class,
            LocationTableSeeder::class,
            OrganizationUnitsTableSeeder::class,
            VendorStatusSeeder::class,
//            UnitSeeder::class,
            SyllabusStatusSeeder::class,
            SyllabusSeeder::class,
            UserNeedStatusSeeder::class,
            CurriculumStatusSeeder::class,
            RequestSyllabusStatusSeeder::class,
        ]);
    }
}
