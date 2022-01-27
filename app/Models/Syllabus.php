<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Request;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Wildside\Userstamps\Userstamps;

class Syllabus extends Model
{
    use HasFactory, LogsActivity, SoftDeletes, Userstamps;

    public $table = 'syllabuses';

    protected $fillable = [
        'number',
        'syllabus_code',
        'training_name',
        'training_summary',
        'training_background',
        'training_description',
        'levels',
        'statuses',
        'locations',
        'units',
        'skills_will_you_gain',
        'learning_scope',
        'vendors',
        'status_id',
        'job_family_id',
        'created_by',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'updated_by',
        'deleted_by',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'levels' => 'collection',
        'statuses' => 'collection',
        'locations' => 'collection',
        'units' => 'collection',
        'skills_will_you_gain' => 'collection',
        'vendors' => 'collection',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'syllabus_code',
                'training_name',
                'training_summary',
                'training_background',
                'training_description',
                'levels->name',
                'statuses->name',
                'locations->name',
                'units->name',
                'skills_will_you_gain->name',
                'learning_scope',
                'vendors->name',
                'syllabusStatus.name'
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
        return $this->belongsTo(SyllabusStatus::class, 'status_id');
    }

    public function requestSyllabus()
    {
        return $this->hasOne(RequestSyllabus::class, 'syllabus_id', 'id');
    }

    public function userNeedsSyllabuses()
    {
        return $this->hasMany(UserNeed::class, 'syllabus_id', 'id');
    }

    public function prfCompetencyCatalog(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            PrfCompetencyCatalog::class,
            'prf_competency_syllabus',
            'syllabus_id',
            'prf_competency_catalog_id'
        );
    }

    // public function competencies(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    // {
    //     return $this->belongsToMany(
    //         Competency::class,
    //         'competency_syllabus',
    //         'syllabus_id',
    //         'competency_id'
    //     );
    // }

    // public function masterData(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    // {
    //     return $this->belongsToMany(
    //         MasterData::class,
    //         'master_data_syllabus',
    //         'syllabus_id',
    //         'master_data_id'
    //     );
    // }

    public function levelsSyllabuses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Level::class,
            'level_syllabus',
            'syllabus_id',
            'level_id'
        );
    }

    public function locationsSyllabuses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Location::class,
            'location_syllabus',
            'syllabus_id',
            'location_id'
        );
    }

    public function unitsSyllabuses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            OrganizationUnit::class,
            'organization_unit_syllabus',
            'syllabus_id',
            'organization_id'
        );
    }

    public function statusesSyllabuses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Status::class,
            'status_syllabus',
            'syllabus_id',
            'status_id'
        );
    }

    public function vendorsSyllabuses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Vendor::class,
            'syllabus_vendor',
            'syllabus_id',
            'vendor_id'
        );
    }

    public function csp(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Csp::class,
            'csp_syllabus',
            'syllabus_id',
            'csp_id'
        );
    }

    public function idp(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Idp::class,
            'idp_syllabus',
            'syllabus_id',
            'idp_id'
        )->withPivot(['priority']);
    }

   
    public function kurikulum(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Kurikulum::class,
            'kurikulum_syllabus',
            'syllabus_id',
            'kurikulum_id'
        );
    }
}
