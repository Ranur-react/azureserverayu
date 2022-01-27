<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubJobFamily extends Model
{
    use HasFactory;

    public $table = 'sub_job_families';

    protected $fillable = [
        'name',
        'number',
        'sub_job_family_code',
        'job_family_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function subJobFamilyJobFamily(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(JobFamily::class, 'job_family_id');
    }

    public function subJobFamilySyllabus(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Syllabus::class, 'sub_job_family_id', 'id');
    }

    public function subJobFamilyCompetency(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Competency::class, 'sub_job_family_id', 'id');
    }

}
