<?php

namespace App\Imports;

use App\Models\OrganizationUnit;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class OrganizationUnitImport implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
     
        if(is_string($row['date_from'])){
            $date_from = null;
        }else if(!is_null($row['date_from'])){
            $date_from = Date::excelToDateTimeObject($row['date_from']);
        }else{
            $date_from = null;
        }

        if(is_string($row['date_to'])){
            $date_to = null;
        }else if(!is_null($row['date_from'])){
            $date_to = Date::excelToDateTimeObject($row['date_to']);
        }else{
            $date_to = null;
        }
            
        return new OrganizationUnit([
            'location_id' => $row['location_id'],
            'date_from' => $date_from,
            'date_to' => $date_to,
            'name' => $row['name'],
            'internal_external_flag' => $row['internal_external_flag'],
            'type' => $row['type'],
        ]);
    }

    public function rules(): array
    {
        return [
            'location_code' => [
                'nullable',
                'numeric',
                'digits_between:1,11'
            ],'name' => [
                'nullable',
                'string',
                'max:255'
            ],'internal_external_flag' => [
                'nullable',
                'string',
                'max:5'
            ],'type' => [
                'nullable',
                'string',
                'max:32'
            ],
        ];
    }

}
