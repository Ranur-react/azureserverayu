<?php

namespace App\Services;
use App\Models\RequestSyllabus;
use App\Models\Syllabus;

class SyllabusService
{

    public function storeSyllabus(
        string $training_name,
        string $training_summary,
        string $training_background,
        string $training_description,
        array $levels_name,
        array $statuses_name,
        array $locations_name,
        array $units_name,
        array $competencies_name,
        string $learning_scope,
        array $vendors_name,
        array $levels,
        array $statuses,
        array $locations,
        array $units,
        array $skills_will_you_gain,
        array $partner_recommendation,
        $jobFamily
    ) {
        $syllabus = $jobFamily->syllabuses()->create([
            'number' => 0,
            'syllabus_code' => "$jobFamily->job_family_code.0",
            'training_name' => $training_name,
            'training_summary' => $training_summary,
            'training_background' => $training_background,
            'training_description' => $training_description,
            'levels' => [
                'name' => $levels_name,
            ],
            'statuses' => [
                'name' => $statuses_name,
            ],
            'locations' => [
                'name' => $locations_name,
            ],
            'units' => [
                'name' => $units_name
            ],
            'skills_will_you_gain' => [
                'name' => $competencies_name,
            ],
            'learning_scope' => $learning_scope,
            'vendors' => [
                'name' => $vendors_name,
            ],
            'status_id' => 3,
        ]);

        // $array_kompetensi = explode(',', $skills_will_you_gain);
        // $array_level = explode(',', $level);
        // $array_status = explode(',', $status);
        // $array_location = explode(',', $lokasi_kerja);
        // $array_unit = explode(',', $unit);
        // $array_partner_recommendation = explode(',', $partner_recommendation);

        $syllabus->levelsSyllabuses()->attach($levels);

        $syllabus->statusesSyllabuses()->attach($statuses);

        $syllabus->locationsSyllabuses()->attach($locations);

        $syllabus->unitsSyllabuses()->attach($units);

        $syllabus->prfCompetencyCatalog()->attach($skills_will_you_gain);

        $syllabus->vendorsSyllabuses()->attach($partner_recommendation);

        return $syllabus;
    }

    public function storeSubJobFamilySyllabus(
        string $training_name,
        string $training_summary,
        string $training_background,
        string $training_description,
        array $levels_name,
        array $statuses_name,
        array $locations_name,
        array $units_name,
        array $competencies_name,
        string $learning_scope,
        array $vendors_name,
        array $levels,
        array $statuses,
        array $locations,
        array $units,
        array $skills_will_you_gain,
        array $partner_recommendation,
        $subJobFamily
    ) {
        $syllabus = $subJobFamily->syllabuses()->create([
            'number' => 0,
            'syllabus_code' => "$subJobFamily->job_family_code.0",
            'training_name' => $training_name,
            'training_summary' => $training_summary,
            'training_background' => $training_background,
            'training_description' => $training_description,
            'levels' => [
                'name' => $levels_name,
            ],
            'statuses' => [
                'name' => $statuses_name,
            ],
            'locations' => [
                'name' => $locations_name,
            ],
            'units' => [
                'name' => $units_name
            ],
            'skills_will_you_gain' => [
                'name' => $competencies_name,
            ],
            'learning_scope' => $learning_scope,
            'vendors' => [
                'name' => $vendors_name,
            ],
            'status_id' => 3,
        ]);

        // $array_kompetensi = explode(',', $skills_will_you_gain);
        // $array_level = explode(',', $level);
        // $array_status = explode(',', $status);
        // $array_location = explode(',', $lokasi_kerja);
        // $array_unit = explode(',', $unit);
        // $array_partner_recommendation = explode(',', $partner_recommendation);

       

        $syllabus->levelsSyllabuses()->attach($levels);

        $syllabus->statusesSyllabuses()->attach($statuses);

        $syllabus->locationsSyllabuses()->attach($locations);

        $syllabus->unitsSyllabuses()->attach($units);       

        $syllabus->prfCompetencyCatalog()->attach($skills_will_you_gain);
        
        $syllabus->vendorsSyllabuses()->attach($partner_recommendation);

        return $syllabus;
    }

    public function storeRequestSyllabus(
        string $syllabus_code,
        string $training_name,
        string $training_summary,
        string $training_background,
        string $training_description,
        string $learning_scope,
        string $job_family_id,
        array $skills_will_you_gain,
        array $level,
        array $status,
        array $lokasi_kerja,
        array $partner_recommendation,
        array $unit,
    ) {
        $syllabus = Syllabus::create([
            'number' => 0,
            'syllabus_code' => "$syllabus_code.0",
            'training_name' => $training_name,
            'training_summary' => $training_summary,
            'training_background' => $training_background,
            'training_description' => $training_description,
            'learning_scope' => $learning_scope,
            'job_family_id' => $job_family_id,
            'status_id' => 3,
        ]);

        $syllabus->prfCompetencyCatalog()->attach($skills_will_you_gain);

        $syllabus->levelsSyllabuses()->attach($level);

        $syllabus->locationsSyllabuses()->attach($lokasi_kerja);

        $syllabus->unitsSyllabuses()->attach($unit);

        $syllabus->statusesSyllabuses()->attach($status);

        $syllabus->vendorsSyllabuses()->attach($partner_recommendation);

        return $syllabus;
    }

    

    public function storeRequestSyllabusJf(
        string $training_name,
        string $training_summary,
        string $training_background,
        string $training_description,
        string $learning_scope,
        array $skills_will_you_gain,
        array $level,
        array $status,
        array $lokasi_kerja,
        array $partner_recommendation,
        array $unit,
        int $job_family,
    ) {
        $syllabus = RequestSyllabus::create([
            'training_name' => $training_name,
            'training_summary' => $training_summary,
            'training_background' => $training_background,
            'training_description' => $training_description,
            'learning_scope' => $learning_scope,
            'status_id' => 3,
            'job_family_id' => $job_family,
        ]);

        // $array_kompetensi = explode(',', $skills_will_you_gain);
        // $array_level = explode(',', $level);
        // $array_status = explode(',', $status);
        // $array_location = explode(',', $lokasi_kerja);
        // $array_unit = explode(',', $unit);
        // $array_partner_recommendation = explode(',', $partner_recommendation);

        $syllabus->competencies()->attach($skills_will_you_gain);

        $syllabus->levels()->attach($level);

        $syllabus->locations()->attach($lokasi_kerja);

        $syllabus->units()->attach($unit);

        $syllabus->statuses()->attach($status);

        $syllabus->vendors()->attach($partner_recommendation);

        return $syllabus;
    }

    public function storeRequestSyllabusSJf(
        string $training_name,
        string $training_summary,
        string $training_background,
        string $training_description,
        string $learning_scope,
        array $skills_will_you_gain,
        array $level,
        array $status,
        array $lokasi_kerja,
        array $partner_recommendation,
        array $unit,
        string $sub_job_family,
    ) {
        $syllabus = RequestSyllabus::create([
            'training_name' => $training_name,
            'training_summary' => $training_summary,
            'training_background' => $training_background,
            'training_description' => $training_description,
            'learning_scope' => $learning_scope,
            'status_id' => 3,
            'job_family_id' => $sub_job_family,
        ]);

        // $array_kompetensi = explode(',', $skills_will_you_gain);
        // $array_level = explode(',', $level);
        // $array_status = explode(',', $status);
        // $array_location = explode(',', $lokasi_kerja);
        // $array_unit = explode(',', $unit);
        // $array_partner_recommendation = explode(',', $partner_recommendation);

        $syllabus->competencies()->attach($skills_will_you_gain);

        $syllabus->levels()->attach($level);

        $syllabus->locations()->attach($lokasi_kerja);

        $syllabus->units()->attach($unit);

        $syllabus->statuses()->attach($status);

        $syllabus->vendors()->attach($partner_recommendation);

        return $syllabus;
    }

    public function updateRequestSyllabusJf(
        string $training_name,
        string $training_summary,
        string $training_background,
        string $training_description,
        string $learning_scope,
        array $skills_will_you_gain,
        array $level,
        array $status,
        array $lokasi_kerja,
        array $partner_recommendation,
        array $unit,
        int $job_family,
        $syllabus
    ) {
        // $array_kompetensi = explode(',', $skills_will_you_gain);
        // $array_level = explode(',', $level);
        // $array_status = explode(',', $status);
        // $array_location = explode(',', $lokasi_kerja);
        // $array_unit = explode(',', $unit);
        // $array_partner_recommendation = explode(',', $partner_recommendation);

        $syllabus->update([
            'training_name' => $training_name,
            'training_summary' => $training_summary,
            'training_background' => $training_background,
            'training_description' => $training_description,
            'learning_scope' => $learning_scope,
            'job_family_id' => $job_family,
        ]);
    
        $syllabus->competencies()->sync($skills_will_you_gain);

        $syllabus->levels()->sync($level);

        $syllabus->locations()->sync($lokasi_kerja);

        $syllabus->units()->sync($unit);

        $syllabus->statuses()->sync($status);

        $syllabus->vendors()->sync($partner_recommendation);
    }

    public function updateRequestSyllabusSJf(
        string $training_name,
        string $training_summary,
        string $training_background,
        string $training_description,
        string $learning_scope,
        array $skills_will_you_gain,
        array $level,
        array $status,
        array $lokasi_kerja,
        array $partner_recommendation,
        array $unit,
        int $sub_job_family,
        $syllabus
    ) {
        // $array_kompetensi = explode(',', $skills_will_you_gain);
        // $array_level = explode(',', $level);
        // $array_status = explode(',', $status);
        // $array_location = explode(',', $lokasi_kerja);
        // $array_unit = explode(',', $unit);
        // $array_partner_recommendation = explode(',', $partner_recommendation);

        $syllabus->update([
            'training_name' => $training_name,
            'training_summary' => $training_summary,
            'training_background' => $training_background,
            'training_description' => $training_description,
            'learning_scope' => $learning_scope,
            'job_family_id' => $sub_job_family,
        ]);
    
        $syllabus->competencies()->sync($skills_will_you_gain);

        $syllabus->levels()->sync($level);

        $syllabus->locations()->sync($lokasi_kerja);

        $syllabus->units()->sync($unit);

        $syllabus->statuses()->sync($status);

        $syllabus->vendors()->sync($partner_recommendation);
    }

    public function updateSyllabus(
        string $training_name,
        string $training_summary,
        string $training_background,
        string $training_description,
        array $levels_name,
        array $statuses_name,
        array $locations_name,
        array $units_name,
        array $competencies_name,
        string $learning_scope,
        array $vendors_name,
        array $levels,
        array $statuses,
        array $locations,
        array $units,
        array $skills_will_you_gain,
        array $partner_recommendation,
        $syllabus
    ) {
        // $array_kompetensi = explode(',', $skills_will_you_gain);
        // $array_level = explode(',', $level);
        // $array_status = explode(',', $status);
        // $array_location = explode(',', $lokasi_kerja);
        // $array_unit = explode(',', $unit);
        // $array_partner_recommendation = explode(',', $partner_recommendation);

        $syllabus_update =  $syllabus->update([
            'training_name' => $training_name,
            'training_summary' => $training_summary,
            'training_background' => $training_background,
            'training_description' => $training_description,
            'levels' => [
                'name' => $levels_name,
            ],
            'statuses' => [
                'name' => $statuses_name,
            ],
            'locations' => [
                'name' => $locations_name,
            ],
            'units' => [
                'name' => $units_name
            ],
            'skills_will_you_gain' => [
                'name' => $competencies_name,
            ],
            'learning_scope' => $learning_scope,
            'vendors' => [
                'name' => $vendors_name,
            ],
        ]);
    
        $syllabus->levelsSyllabuses()->sync($levels);

        $syllabus->statusesSyllabuses()->sync($statuses);

        $syllabus->locationsSyllabuses()->sync($locations);

        $syllabus->unitsSyllabuses()->sync($units);

        $syllabus->prfCompetencyCatalog()->sync($skills_will_you_gain);

        $syllabus->vendorsSyllabuses()->sync($partner_recommendation);
    }
}
