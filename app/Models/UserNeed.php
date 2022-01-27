<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class UserNeed extends Model
{
    use HasFactory;

    public $table = 'user_needs';

    protected $fillable = [
        'name_of_program',
        'objective_program',
        'training_urgency',
        'future_plans_after_training',
        'content',
        'vendor_id',
        'trainer',
        'specialities_trainer',
        'method',
        'date',
        'start_time',
        'end_time',
        'hcbp_nik',
        'created_by_nik',
        'status_id',
        'syllabus_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function syllabus(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Syllabus::class, 'syllabus_id');
    }

    public function createdEmployee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Employee::class, 'created_by_nik', 'nik');
    }

    public function hcbp(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Employee::class, 'hcbp_nik', 'nik');
    }

    public function userNeedStatus(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(UserNeedStatus::class, 'status_id');
    }

    public function userNeedVendor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    public function userNeedsEmployees(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Employee::class,
            'user_need_employee',
            'user_need_id',
            'nik'
        );
    }
}
