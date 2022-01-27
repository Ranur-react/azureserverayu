<?php

namespace App\Exports;

use App\Models\OrganizationUnit;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrganizationUnitExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OrganizationUnit::all();
    }

    public function headings(): array
    {
        return [
            'Organization ID',
            'Location Code',
            'Date From',
            'Date To',
            'Name',
            'Internal External Flag',
            'Type',
        ];
    }
}
