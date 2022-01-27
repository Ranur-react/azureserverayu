<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrfCompetencyRequirement extends Model
{
    use HasFactory;

    public $table = 'prf_competency_requirements';

    protected $fillable = [
        'position_id',
        'job_id',
        'competency_id',
        'minimum_requirement',
        'minimum_requirement_description',
        'legal_entity'
    ];

    protected $hidden = [
        'updated_at',
        'updated_by',
        'created_at',
        'created_by',
    ];

    public function prfCompetencyCatalog(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PrfCompetencyCatalog::class, 'competency_id');
    }

}
