<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Wildside\Userstamps\Userstamps;

class RequestSyllabus extends Model
{
    use HasFactory, LogsActivity, Userstamps;

    public $table = 'request_syllabuses';

    protected $fillable = [
        'training_name',
        'training_summary',
        'training_background',
        'training_description',
        'learning_scope',
        'status_id',
        'syllabus_id',
        'job_family_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'training_name',
                'training_summary',
                'training_background',
                'training_description',
                'learning_scope',
                'syllabusStatus.name',
                'syllabusJobFamily.name',
            ])
            ->logOnlyDirty();
        // Chain fluent methods for configuration options
    }

    public function syllabusJobFamily(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(JobFamily::class, 'job_family_id');
    }

    public function syllabusStatus(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RequestSyllabusStatus::class, 'status_id');
    }

    public function syllabus()
    {
        return $this->belongsTo(Syllabus::class);
    }

    public function competencies(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Competency::class,
            'competency_request_syllabus',
            'syllabus_id',
            'competency_id'
        );
    }

    public function levels(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Level::class,
            'level_request_syllabuses',
            'syllabus_id',
            'level_id'
        );
    }

    public function locations(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Location::class,
            'location_request_syllabuses',
            'syllabus_id',
            'location_id'
        );
    }

    public function units(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            OrganizationUnit::class,
            'unit_request_syllabuses',
            'syllabus_id',
            'unit_id'
        );
    }

    public function statuses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Status::class,
            'status_request_syllabuses',
            'syllabus_id',
            'status_id'
        );
    }

    public function vendors(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Vendor::class,
            'vendor_request_syllabuses',
            'syllabus_id',
            'vendor_id'
        );
    }
}
