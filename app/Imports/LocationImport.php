<?php

namespace App\Imports;

use App\Models\Location;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class LocationImport implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Location([
            'location_code' => $row['location_code'],
            'description' => $row['description'],
            'address_line_1' => $row['address_line_1'],
            'address_line_2' => $row['address_line_2'],
            'town_or_city' => $row['town_or_city'],
            'postal_code' => $row['postal_code'],
            'region_1' => $row['region_1'],
            'admins' => $row['admins'],
        ]);
    }

    public function rules(): array
    {
        return [
            'location_code' => [
                'nullable',
                'string',
                'max:64'
            ],'description' => [
                'nullable',
                'string',
                'max:255'
            ],'address_line_1' => [
                'nullable',
                'string',
                'max:255'
            ],'address_line_2' => [
                'nullable',
                'string',
                'max:255'
            ],'town_or_city' => [
                'nullable',
                'string',
                'max:4'
            ],'postal_code' => [
                'nullable',
                'numeric',
                'digits_between:1,10'
            ],'region_1' => [
                'nullable',
                'string',
                'max:64'
            ],'admins' => [
                'nullable',
                'string',
                'max:32'
            ],
        ];
    }
    
}
