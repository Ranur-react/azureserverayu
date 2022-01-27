<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PrfCompetencyCatalog extends Model
{
    use HasFactory;

    public $table = 'prf_competency_catalog';

    protected $fillable = [
        'name',
        'type',
        'definition',
        'definition_english',
        'status',
        // 'job_family_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function syllabuses(): BelongsToMany
    {
        return $this->belongsToMany(
            Syllabus::class,
            'prf_competency_syllabus',
            'prf_competency_catalog_id',
            'syllabus_id'
        );
    }

    public function prfCompetencyRequirements()
    {
        return $this->hasMany(PrfCompetencyRequirement::class, 'competency_id');
    }
}
