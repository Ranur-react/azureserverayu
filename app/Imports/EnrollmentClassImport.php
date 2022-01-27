<?php

namespace App\Imports;

use App\Models\Enrollment;
use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EnrollmentClassImport implements ToCollection, WithHeadingRow
{
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    /**
     * @param Collection $rows
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $user_id = DB::table('users')->select('id', 'nik')->where('nik', '=', $row['nik'])->first()->id;
            Enrollment::create([
                'user_id' => $user_id,
                'status' => 'working',
                'class_id' => $this->id
            ]);
        }
    }
}
