<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class JobFamily extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    public $table = 'job_families';

    protected $with = ['pending_syllabuses'];

    protected $fillable = [
        'name',
        'number',
        'job_family_code',
        'description',
        'parent_id',
        'level',
        'level_description',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

//    protected $dates = [
//        'created_at',
//        'updated_at',
//        'deleted_at',
//    ];


    // protected static function boot()
    // {

    //     parent::boot();

    //     // updating created_by and updated_by when model is created
    //     static::creating(function ($model) {
    //         if (!$model->isDirty('created_by')) {
    //             $model->created_by = auth()->user()->employee->person_id;
    //         }
    //         if (!$model->isDirty('updated_by')) {
    //             $model->updated_by = auth()->user()->employee->person_id;
    //         }
    //     });

    //     // updating updated_by when model is updated
    //     static::updating(function ($model) {
    //         if (!$model->isDirty('updated_by')) {
    //             $model->updated_by = auth()->user()->employee->person_id;
    //         }
    //     });

    //     static::deleting(function ($model) {
    //         $model->deleted_by = auth()->user()->employee->person_id;
    //     });
    // }

    public function jobFamilySubJobFamily(): HasMany
    {
        return $this->hasMany(JobFamily::class, 'parent_id', 'id');
    }

    public function subJobFamilyJobFamily(): BelongsTo
    {
        return $this->belongsTo(JobFamily::class, 'parent_id');
    }

    public function syllabuses(): HasMany
    {
        return $this->hasMany(Syllabus::class, 'job_family_id', 'id');
    }

    public function requestSyllabuses(): HasMany
    {
        return $this->hasMany(RequestSyllabus::class, 'job_family_id', 'id');
    }

    // public function competencies(): HasMany
    // {
    //     return $this->hasMany(Competency::class, 'job_family_id', 'id');
    // }

    public function pending_syllabuses(): HasMany
    {
        return $this->hasMany(Syllabus::class, 'job_family_id', 'id')
            ->where([['status_id',3]]);
    }
}
