<?php

namespace App\Exports;

use App\Models\Location;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LocationExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Location::all();
    }
    
    public function headings(): array
    {
        return [
            'Location ID',
            'Location Code',
            'Description',
            'Address Line 1',
            'Address Line 2',
            'Town or City',
            'Postal Code',
            'Region 1',
            'Admins',
        ];
    }
}
