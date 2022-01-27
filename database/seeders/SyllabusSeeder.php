<?php

namespace Database\Seeders;

use App\Models\Syllabus;
use App\Models\Level;
use App\Models\Location;
use App\Models\PrfCompetencyCatalog;
use App\Models\Status;
use App\Models\OrganizationUnit;
use Illuminate\Database\Seeder;

class SyllabusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Syllabus::factory(1000)->create();

        // Get all the competency attaching up to 3 random roles to each user
        $prfCompetencyCatalog = PrfCompetencyCatalog::all();

        // Get all the roles attaching up to 3 random roles to each user
        $levels = Level::all('id');
        $status = Status::all('id');
        $units = OrganizationUnit::all('organization_id');
        $locations = Location::all('location_id');

        // Populate the pivot table
        Syllabus::all()->each(function ($user) use ($prfCompetencyCatalog) {
            $user->prfCompetencyCatalog()->attach(
                $prfCompetencyCatalog->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        // Populate the pivot table
        Syllabus::all()->each(function ($user) use ($levels) {
            $user->levelsSyllabuses()->attach(
                $levels->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        // Populate the pivot table
        Syllabus::all()->each(function ($user) use ($status) {
            $user->statusesSyllabuses()->attach(
                $status->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        // Populate the pivot table
        Syllabus::all()->each(function ($user) use ($units) {
            $user->unitsSyllabuses()->attach(
                $units->random(rand(1, 3))->pluck('organization_id')->toArray()
            );
        });

        // Populate the pivot table
        Syllabus::all()->each(function ($user) use ($locations) {
            $user->locationsSyllabuses()->attach(
                $locations->random(rand(1, 3))->pluck('location_id')->toArray()
            );
        });
    }
}
