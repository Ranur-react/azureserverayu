<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UserNeedImport implements ToCollection,WithValidation, WithHeadingRow
{
    public function  __construct($user_need)
    {
        $this->user_need = $user_need;
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            $this->user_need->userNeedsEmployees()->attach([
                $row['nik']
            ]);
        }
       
    }

    public function rules(): array
    {
        return [
            'nik' => [
                'required',
                'max:25',
                'distinct',
                'exists:employee,nik',
            ],
        ];
    }
}
